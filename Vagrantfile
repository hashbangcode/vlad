# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vlad - Vagrant LAMP Ansible Drupal
# A Drupal development platform in a box, with everything you would need to develop Drupal websites.
# See the readme file (README.md) for more information.
# Contribute to this project at : https://github.com/hashbangcode/vlad

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

# Find the current vagrant directory & create additional vars from it
vagrant_dir = File.expand_path(File.dirname(__FILE__))
parent_dir = File.dirname(vagrant_dir)
vlad_hosts_file = vagrant_dir + '/vlad/host.ini'

# Load settings and overrides files
settings_files = {
  "Vlad settings" => [vagrant_dir + "/vlad/settings.yml",
                      vagrant_dir + "/settings/vlad_settings.yml",
                      parent_dir + "/settings/vlad_settings.yml"
                     ],
  "local overrides" => [vagrant_dir + "/vlad/local_settings.yml",
                        vagrant_dir + "/settings/vlad_local_settings.yml",
                        parent_dir + "/settings/vlad_local_settings.yml"
                       ]
}

vconfig = YAML::load_file(vagrant_dir + "/vlad/playbooks/vars/defaults/vagrant.yml")

# Iterate over the settings files and load the first file that is found for each type, then
# merge them over the base/default settings loaded in vconfig
loaded_vlad_settings = false
puts "\nChecking for Vlad settings and local overrides..."
settings_files.each do |type, paths|
  paths.each do |file|
    if File.exists?(file)
      puts "Loading #{type} file: #{file}"
      loaded_vlad_settings = true
      settings_to_merge = YAML::load_file(file)
      vconfig = vconfig.merge settings_to_merge
      break
    end
  end
end

# Warn if we didn't find any files to load
unless loaded_vlad_settings
  puts "No Vlad settings or local overrides files found (will use default settings)."
end
puts 

# Set box configuration options
boxipaddress = vconfig['boxipaddress']
boxname = vconfig['boxname']
boxwebaddress = vconfig['webserver_hostname']
hostname_aliases = vconfig['webserver_hostname_aliases']
synced_folder_type = vconfig['synced_folder_type']
vlad_os = vconfig['vlad_os']

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
    config.cache.scope = :machine
    if is_windows
      config.cache.synced_folder_opts = { type: "smb", smb_username: samba_username, smb_password: samba_password}
    else
      config.cache.synced_folder_opts = { type: :nfs }
    end
    config.cache.auto_detect = false

    if vlad_os == "centos66"
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
    auto_cpus = `nproc`.to_i
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

  if vlad_os == "centos66"
    # Add a Centos VirtualBox box
    config.vm.box = "hansode/centos-6.6-x86_64"
  elsif vlad_os == "ubuntu14"
    # Add a Ubuntu VirtualBox box
    config.vm.box = "ubuntu/trusty64"
  else
    # Add a Ubuntu VirtualBox box
    config.vm.box = "ubuntu/precise64"
  end

  # VMWare provider settings
  config.vm.provider "vmware_fusion" do |vmw|
    # Configure CPU number and amount of RAM memory.
    vmw.vmx["memsize"] = vagrant_memory
    vmw.vmx["numvcpus"] = vagrant_cpus
  end
  
  # Virtualbox provider settings
  config.vm.provider "virtualbox" do |vb|
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
    '--natdnshostresolver1', 'on',
    '--nictype1', 'virtio',
    '--nictype2', 'virtio'] 
    
    # Configure OS type
    if vlad_os == "centos66"
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
    config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", type: "nfs", create: true, id: "vagrant-webroot"

    # Setup auxiliary synced folder
    config.vm.synced_folder vconfig['aux_synced_folder'], "/var/www/site/vlad_aux", type: "nfs", create: true, id: "vagrant-aux"

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
  # We need to disable this in order to pass the correct identity from host to guest.
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
    
  # Run an Ansible playbook on setting the box up
  config.trigger.before [:up, :resume], :stdout => true, :force => true do
    info "Executing 'up' setup trigger"
      if !File.exist?(vlad_hosts_file)
        if is_windows
          info "Creating " + vlad_hosts_file
          FileUtils.cp(vagrant_dir + "/vlad/playbooks/templates/host.j2 ", vlad_hosts_file)
        else
          run 'ansible-playbook -i ' + boxipaddress + ', ' + vagrant_dir + '/vlad/playbooks/local_up.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
        end
      end
  end

   # Run the halt/destroy playbook upon halting or destroying the box
  if File.exist?(vlad_hosts_file)
    config.trigger.before [:halt, :destroy], :stdout => true, :force => true do
      info "Executing 'halt/destroy' trigger"
      if is_windows
        run_remote 'ansible-playbook -i ' + boxipaddress + ', /vagrant/vlad/playbooks/local_halt_destroy.yml --extra-vars "is_windows=true local_ip_address=' + boxipaddress + '" --connection=local'
        info "Deleting " + vlad_hosts_file
        File.delete(vlad_hosts_file) if File.exist?(vlad_hosts_file)
      else
        run 'ansible-playbook ' + vagrant_dir + '/vlad/playbooks/local_halt_destroy.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
      end
    end
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info "Executing 'up' services trigger"
    if is_windows
      run_remote 'ansible-playbook -i ' + boxipaddress + ', /vagrant/vlad/playbooks/local_up_services.yml --extra-vars "is_windows=true local_ip_address=' + boxipaddress + '" --connection=local'
    else
      run 'ansible-playbook ' + vagrant_dir + '/vlad/playbooks/local_up_services.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
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
    #if there a line that only consists of 'mesg n' in /root/.profile, replace it with 'tty -s && mesg n'
    sh.inline = "(grep -q -E '^mesg n$' /root/.profile && sed -i 's/^mesg n$/tty -s \\&\\& mesg n/g' /root/.profile && echo 'Ignore the previous error about stdin not being a tty. Fixing it now...') || exit 0;"
  end
    
  # Provision vagrant box with Ansible.
  if is_windows
    # Provisioning configuration for shell script.
    config.vm.provision "shell" do |sh|
      sh.path = vagrant_dir + "/vlad/scripts/ansible-run-remote.sh"
      # run all tags
      sh.args = "/vlad/playbooks/site.yml " + boxipaddress + ', ' + 'all'
    end
  else
    config.vm.provision "ansible" do |ansible|
      ansible.playbook = vagrant_dir + "/vlad/playbooks/site.yml"
      ansible.extra_vars = {ansible_ssh_user: 'vagrant'}
      ansible.host_key_checking = false
      ansible.raw_ssh_args = '-o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -o PasswordAuthentication=no -o IdentitiesOnly=yes'
      if vconfig['ansible_verbosity'] != ''
        ansible.verbose = vconfig['ansible_verbosity']
      end
    end
  end    

  # Run the custom Ansible playbook if the custom role exists
  if File.exist?(vagrant_dir + "/vlad_custom/tasks/main.yml") || File.exist?("../vlad_custom/tasks/main.yml")
    if is_windows
      # Provisioning configuration for shell script.
      config.vm.provision "shell" do |sh|
        sh.path = vagrant_dir + "/vlad/scripts/ansible-run-remote.sh"
        sh.args = "/vlad/playbooks/site-custom.yml " + boxipaddress + ','
      end
    else
      config.vm.provision "ansible" do |ansible|
        ansible.playbook = vagrant_dir + "/vlad/playbooks/site_custom.yml"
        ansible.extra_vars = {ansible_ssh_user: 'vagrant'}
        ansible.host_key_checking = false
        ansible.raw_ssh_args = '-o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -o PasswordAuthentication=no -o IdentitiesOnly=yes'
        ansible.limit = 'all'
        if vconfig['ansible_verbosity'] != ''
          ansible.verbose = vconfig['ansible_verbosity']
        end
     end
    end
  end

end
