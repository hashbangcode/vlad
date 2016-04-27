# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vlad - Vagrant LAMP Ansible Drupal
# A Drupal development platform in a box, with everything you would need to
# develop Drupal websites.
# See the README file (README.md) for more information.
# Contribute to this project at: https://github.com/hashbangcode/vlad

VLAD_FALLBACK_SETTINGS = "/vlad_guts/vlad_settings.yml"
VLAD_SETTINGS = "/settings/vlad_settings.yml"
VLAD_FALLBACK_LOCAL_SETTINGS = "/vlad_guts/vlad_local_settings.yml"
VLAD_LOCAL_SETTINGS = "/settings/vlad_local_settings.yml"
VLAD_MERGED_SETTINGS = "/vlad_guts/merged_user_settings.yml"
# Identify settings file location

# Find the current vagrant directory & get ancestors
dir_ancestors = [ File.expand_path(File.dirname(__FILE__)) ]
(0..3).each do |depth| # Up to great grandparent
  dir_ancestors.push File.dirname(dir_ancestors[depth])
end
# Drop duplicates, which can happen if our starting directory is shallow
dir_ancestors = dir_ancestors.uniq

settings_files = {
  "project settings" => [dir_ancestors[0] + VLAD_FALLBACK_SETTINGS] +
                        dir_ancestors.map {|dir| dir + VLAD_SETTINGS},

  "local overrides" => [dir_ancestors[0] + VLAD_FALLBACK_LOCAL_SETTINGS] +
                        dir_ancestors.map {|dir| dir + VLAD_LOCAL_SETTINGS}
}

# Iterate over the settings files and note the first file that is found for
# each type.
settings_to_merge = []
loaded_vlad_settings = false
settings_files.each do |type, paths|
 paths.each do |file|
   if File.exists?(file)
     puts "Found #{type} file: #{file}" unless ENV['SUPPRESS_INITIAL_OUTPUT']
     loaded_vlad_settings = true
     settings_to_merge.push file
     break
   end
 end
end

if settings_to_merge.empty?
  # Warn if we didn't find any files to load
  puts "No #{settings_files.keys.first} or #{settings_files.keys.last} found (will use default settings)."
elsif ENV['VAGRANT_DOTFILE_PATH'].nil?
  # We've found a settings file, and VAGRANT_DOTFILE_PATH is unset.
  # We should set it and restart vagrant so it places the .vagrant directory
  # appropriately. We will also skip moving the .vagrant directory if the user
  # has set it manually.
  dotfile_path = File.join(File.dirname(settings_to_merge[0]), '.vagrant')
  ENV['VAGRANT_DOTFILE_PATH'] = dotfile_path
  ENV['SUPPRESS_INITIAL_OUTPUT'] = 'TRUE'
  exec "vagrant #{ARGV.join(' ')}"
end

# Minimum Vagrant version required
Vagrant.require_version ">= 1.6.4"

# Use rbconfig to determine if we're on a windows host or not.
require 'rbconfig'
is_windows = (RbConfig::CONFIG['host_os'] =~ /mswin|mingw|cygwin/)

# Install required plugins if not present.
required_plugins = %w(vagrant-triggers vagrant-hostsupdater)
required_plugins.each do |plugin|
  need_restart = false
  unless Vagrant.has_plugin? plugin
    system "vagrant plugin install #{plugin}"
    need_restart = true
  end
  exec "vagrant #{ARGV.join(' ')}" if need_restart
end

vlad_hosts_file = dir_ancestors[0] + '/vlad_guts/host.ini'

# Load base settings
vconfig = YAML::load_file(dir_ancestors[0] + "/vlad_guts/playbooks/vars/defaults/vagrant.yml")

# Iterate over each loaded settings file and merge it into the base/default
# settings loaded in vconfig
settings_to_merge.each do |settings_file|
  settings_data = YAML::load_file(settings_file)
  vconfig = vconfig.merge settings_data
end

# Handling of merged settings file
merged_settings_file = dir_ancestors[0] + VLAD_MERGED_SETTINGS
if loaded_vlad_settings
  # Convert merged user settings to YAML and write to file
  merged_settings_yml = vconfig.to_yaml
  File.open(merged_settings_file, "w") {|f| f.write(merged_settings_yml) }
else
  # Wite a placeholder YAML file for Ansible to still load
  File.open(merged_settings_file, "w") {|f| f.write("---\n# This is a placeholder file to keep Ansible happy when using only Vlad default settings.\n") }
end
puts

# Set box configuration options
boxipaddress = vconfig['boxipaddress']
boxname = vconfig['boxname']
boxwebaddress = vconfig['webserver_hostname']
hostname_aliases = vconfig['webserver_hostname_aliases']
synced_folder_type = vconfig['synced_folder_type']
vlad_os = vconfig['vlad_os']
vlad_custom_play = vconfig['vlad_custom_play']
vlad_custom_play_path = vconfig['vlad_custom_play_path']
vlad_custom_play_file = vconfig['vlad_custom_play_file']
vlad_custom_base_box_name = vconfig['vlad_custom_base_box_name']

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

# SMB credentials (Windows only)
samba_username = vconfig['smb_username']
samba_password = vconfig['smb_password']

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Configure virtual machine options.
  config.vm.hostname = boxname
  config.vm.network :private_network, ip: boxipaddress

  # Allow caching to be used (see the vagrant-cachier plugin)
  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :box
    if is_windows
      config.cache.synced_folder_opts = { type: "smb", smb_username: samba_username, smb_password: samba_password}
    else
      config.cache.synced_folder_opts = { type: :nfs }
    end
    config.cache.auto_detect = false

    if vlad_os == "centos67"
      config.cache.enable :yum
    else
      config.cache.enable :apt
    end

    config.cache.enable :gem
    config.cache.enable :npm
  end

  # Set *Vagrant* VM name (e.g. "vlad_myboxname_74826748251406_66388")
  config.vm.define boxname do |boxname|
  end

  # Calculate "auto" values for CPUs & memory
  host = RbConfig::CONFIG['host_os']
  # Give VM 1/4 system memory & access to all CPU cores on the host
  if host =~ /darwin/
    auto_cpus = `sysctl -n hw.ncpu`.to_i
    # sysctl returns Bytes and we need to convert to MB
    auto_memory = `sysctl -n hw.memsize`.to_i / 1024 / 1024 / 4
  elsif host =~ /linux/
    auto_cpus = `nproc`.to_i / 2
    # meminfo shows KB and we need to convert to MB
    auto_memory = `grep 'MemTotal' /proc/meminfo | sed -e 's/MemTotal://' -e 's/ kB//'`.to_i / 1024 / 4
  else
    # static defaults as fallback (Windows will get this)
    auto_cpus = 1
    auto_memory = 1024
  end

  # Clearer vars
  settings_cpus = vconfig['vm_cpus']
  settings_memory = vconfig['vm_memory']

  # CPUs to use
  if settings_cpus == "auto"
    # Auto
    vagrant_cpus = auto_cpus
  else
    # Explicit or default
    vagrant_cpus = settings_cpus
  end

  # Memory to use
  if settings_memory == "auto"
    # Auto
    vagrant_memory = auto_memory
  else
    # Explicit or default
    vagrant_memory = settings_memory
  end

  #Select the proper base box and configure it for each provider.
  if vlad_custom_base_box_name != ""
    # Add a previously built custom box
    target_box = vlad_custom_base_box_name
  else
    target_box = case vlad_os
      when "centos67" then "bento/centos-6.7"
      when "ubuntu14" then "bento/ubuntu-14.04"
      when "ubuntu12" then "bento/ubuntu-12.04"
      else
        abort "Unknown basebox! Check your settings file."
    end
  end

  # VMWare provider settings.
  config.vm.provider "vmware_fusion" do |vmw, o|
    o.vm.box = target_box
    vmw.gui = false
    vmw.vmx["displayname"] = boxname + "_vlad"
    vmw.vmx["numvcpus"] = vagrant_cpus
    vmw.vmx["memsize"] = vagrant_memory
  end

  # Configure Parallels Desktop setup.
  config.vm.provider "parallels" do |p, o|
    o.vm.box = target_box
    p.name = boxname + "_vlad"
    p.cpus = vagrant_cpus
    p.memory = vagrant_memory
    p.customize ["set", :id, "--longer-battery-life", vconfig['vlad_parallels_longer_battery_life']]

    # Update guest tools if so configured.
    update_guest_tools = vconfig.has_key?('parallels_update_guest_tools') ? vconfig['parallels_update_guest_tools'] : false
    p.update_guest_tools = update_guest_tools
  end

  # Virtualbox provider settings
  config.vm.provider "virtualbox" do |vb, o|
    o.vm.box = target_box
    #
    # Fixed settings
    #

    # Set *provider* VM name (e.g. "myboxname_vlad")
    vb.name = boxname + "_vlad"

    # Configure CPU number and amount of RAM memory.
    vb.memory = vagrant_memory
    vb.cpus = vagrant_cpus

    # Configure misc settings
    vb.customize ['modifyvm', :id,
    '--rtcuseutc', 'on',
    '--natdnshostresolver1', 'off',
    '--nictype1', 'virtio',
    '--nictype2', 'virtio',
    '--natdnsproxy1', 'on',
    '--natdnspassdomain1', 'on']

    # Configure OS type
    if vlad_os == "centos67"
      vb.customize ["modifyvm", :id, "--ostype", "RedHat_64"]
    elsif vlad_os == "ubuntu14"
      vb.customize ["modifyvm", :id, "--ostype", "Ubuntu_64"]
    else
      vb.customize ["modifyvm", :id, "--ostype", "Ubuntu_64"]
    end

    #
    # Customizable settings (important for performance)
    #
    vb.customize ["modifyvm", :id, "--pae", vconfig['vm_pae']]
    vb.customize ["modifyvm", :id, "--acpi", vconfig['vm_acpi']]
    vb.customize ["modifyvm", :id, "--ioapic", vconfig['vm_ioapic']]
    vb.customize ["modifyvm", :id, "--chipset", vconfig['vm_chipset']]
  end

  if is_windows

    # Setup auxiliary synced folder

    FileUtils.mkdir_p vconfig['aux_synced_folder'] if !File.exist?(vconfig['aux_synced_folder'])
    config.vm.synced_folder vconfig['aux_synced_folder'], "/var/www/site/vlad_aux",
      type: "smb",
      id: "vagrant-aux",
      smb_username: samba_username,
      smb_password: samba_password

  elsif synced_folder_type == 'nfs'

    # Set up NFS drive.
    nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/

    # Setup synced folder for site files
    config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", type: "nfs", nfs_udp: false, create: true, id: "vagrant-webroot"

    # Setup auxiliary synced folder
    config.vm.synced_folder vconfig['aux_synced_folder'], "/var/www/site/vlad_aux", type: "nfs", nfs_udp: false, create: true, id: "vagrant-aux"

  elsif synced_folder_type == 'rsync'

    # Setup synced folder for site files
    config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", type: "rsync", create: true, id: "vagrant-webroot"

    # Setup auxiliary synced folder
    config.vm.synced_folder vconfig['aux_synced_folder'], "/var/www/site/vlad_aux", type: "rsync", create: true, id: "vagrant-aux"

  else

    puts "Vlad in *nix requires the synced_folder setting to be one of the following:"
    puts " - nfs"
    puts " - rsync"
    puts
    puts "Please check your settings and try again."
    exit

  end

  # SSH setup
  # Vagrant >= 1.7.0 defaults to using a randomly generated RSA key.
  # We need to disable this in order to pass the correct identity from host
  # to guest.
  config.ssh.insert_key = false
  # Allow identities to be passed from host to guest.
  config.ssh.forward_agent = true

  # vagrant-hostsupdater plugin will manage /etc/hosts upon up/halt/suspend.
  config.hostsupdater.aliases = [
    'adminer.' + boxwebaddress,
    'xhprof.' + boxwebaddress,
    'logs.' + boxwebaddress,
    boxwebaddress
  ] + hostname_aliases
  config.hostsupdater.remove_on_suspend = true

  # Download required Ansible Galaxy roles
  config.trigger.before [:up, :provision], :stdout => true, :force => true do
    info "Executing pre 'provision' setup trigger"
    run 'ansible-galaxy install -r vlad_guts/playbooks/requirements.yml --force'
  end

  # Run an Ansible playbook on setting the box up
  config.trigger.before [:up], :stdout => true, :force => true do
    info "Executing 'up' setup trigger"
      if is_windows
        info "Creating " + vlad_hosts_file
        FileUtils.cp(dir_ancestors[0] + "/vlad_guts/playbooks/templates/host.j2 ", vlad_hosts_file)
      else
        run 'ansible-playbook -i ' + boxipaddress + ', ' + dir_ancestors[0] + '/vlad_guts/playbooks/local_up.yml --extra-vars "local_ip_address=' + boxipaddress + '" --extra-vars "vlad_local_inventory_dir=' + dir_ancestors[0] + '/vlad_guts"'
      end
  end

  # Run the halt/destroy playbook upon halting or destroying the box
  config.trigger.before [:halt, :destroy], :stdout => true, :force => true do
    info "Executing 'halt/destroy' trigger"
    if is_windows
      run_remote 'ansible-playbook -i ' + boxipaddress + ', /vagrant/vlad_guts/playbooks/local_halt_destroy.yml --extra-vars "is_windows=true local_ip_address=' + boxipaddress + '" --connection=local'
      info "Deleting " + vlad_hosts_file
      File.delete(vlad_hosts_file) if File.exist?(vlad_hosts_file)
    else
      run 'ansible-playbook -i ' + boxipaddress + ', ' + dir_ancestors[0] + '/vlad_guts/playbooks/local_halt_destroy.yml --private-key=~/.vagrant.d/insecure_private_key --extra-vars "local_ip_address=' + boxipaddress + '"'
    end
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info "Executing 'up' services trigger"
    if is_windows
      run_remote 'ansible-playbook -i ' + boxipaddress + ', /vagrant/vlad_guts/playbooks/local_up_services.yml --extra-vars "is_windows=true local_ip_address=' + boxipaddress + '" --connection=local'
    else
      run 'ansible-playbook -i ' + boxipaddress + ', ' + dir_ancestors[0] + '/vlad_guts/playbooks/local_up_services.yml --private-key=~/.vagrant.d/insecure_private_key --extra-vars "local_ip_address=' + boxipaddress + '"'
    end
  end

  config.trigger.after :provision, :stdout => true, :force => true do
    info 'Vlad provisioning complete!'
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info 'Vlad is up and running!'
  end

  # Workaround to https://github.com/mitchellh/vagrant/issues/1673
  config.vm.provision "shell" do |sh|
    # if there is a line that only consists of 'mesg n' in /root/.profile,
    # replace it with 'tty -s && mesg n'
    sh.inline = "(grep -q -E '^mesg n$' /root/.profile && sed -i 's/^mesg n$/tty -s \\&\\& mesg n/g' /root/.profile && echo 'Ignore the previous error about stdin not being a tty. Fixing it now...') || exit 0;"
  end

  # Provision vagrant box with Ansible.
  if is_windows
    # Provisioning configuration for shell script.
    config.vm.provision "shell" do |sh|
      # Download required Ansible Galaxy roles
      sh.inline = 'ansible-galaxy install -r vlad_guts/playbooks/requirements.yml --force'
      # Wrapper script for playbooks
      sh.path = dir_ancestors[0] + "/vlad_guts/scripts/ansible-run-remote.sh"
      # run all tags
      sh.args = "/vlad_guts/playbooks/site.yml " + boxipaddress + ', ' + 'all'
    end
  else
    config.vm.provision "ansible" do |ansible|
      ansible.playbook = dir_ancestors[0] + "/vlad_guts/playbooks/site.yml"
      ansible.host_key_checking = false
      ansible.raw_ssh_args = '-o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -o PasswordAuthentication=no -o IdentitiesOnly=yes'
      ansible.inventory_path = 'vlad_guts/host.ini'
      ansible.limit = 'all'
      if vconfig['ansible_verbosity'] != ''
        ansible.verbose = vconfig['ansible_verbosity']
      end
    end
  end

  # Run an additional custom Ansible playbook if configured to do so.
  if vlad_custom_play
    custom_play_full_path = vlad_custom_play_path + vlad_custom_play_file
    puts "Checking for custom play at: " + custom_play_full_path
    puts
    # Check if custom play exists.
    if File.exist?(custom_play_full_path)
      if is_windows
        # Provisioning configuration for shell script.
        config.vm.provision "shell" do |sh|
          sh.path = dir_ancestors[0] + "/vlad_guts/scripts/ansible-run-remote.sh"
          sh.args = custom_play_full_path + ' ' + boxipaddress + ','
        end
      else
        config.vm.provision "ansible" do |ansible|
          ansible.playbook = custom_play_full_path
          ansible.host_key_checking = false
          ansible.raw_ssh_args = '-o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -o PasswordAuthentication=no -o IdentitiesOnly=yes'
          ansible.inventory_path = 'vlad_guts/host.ini'
          ansible.limit = 'all'
          if vconfig['ansible_verbosity'] != ''
            ansible.verbose = vconfig['ansible_verbosity']
          end
       end
      end
    end
  end

end
