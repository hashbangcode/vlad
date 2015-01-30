# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vlad - Vagrant LAMP Ansible Drupal
# A Drupal development platform in a box, with everything you would need to develop Drupal websites.
# See the readme file (README.md) for more information.
# Contribute to this project at : https://github.com/hashbangcode/vlad

# If vagrant-trigger isn't installed then exit
if !Vagrant.has_plugin?("vagrant-triggers")
  puts "Vlad requires the plugin 'vagrant-triggers'"
  puts "This can be installed by running:"
  puts
  puts " vagrant plugin install vagrant-triggers"
  puts
  exit
end

# Find the current vagrant directory & create additional vars from it
vagrant_dir = File.expand_path(File.dirname(__FILE__))
parent_dir = File.dirname(vagrant_dir)
vlad_hosts_file = vagrant_dir + '/vlad/host.ini'

# Initialise settings_file variable
settings_file = ""

# Preferred settings files in order of precedence
# Lower array index means higher precedence
# e.g. settings_file_paths[0] trumps everything
settings_file_paths = [
    vagrant_dir + "/vlad/settings.yml",
    parent_dir + "/settings/vlad-settings.yml"
    ]

# Loop through settings file paths
settings_file_paths.each do |file_path|
  # If settings file exists, assign its path to settings_file
  if File.exist?(file_path)
      settings_file = file_path
  end
end

# Get ready to retrieve stuff from YAML files
require 'yaml'

if settings_file != ""
  # Feedback to confirm which Vlad settings file Vagrant will use
  puts
  puts "Loading Vlad settings file: #{settings_file}"
  puts
  # Include config from settings file and Vlad's default vars
  vdefaults = YAML::load_file(vagrant_dir + "/vlad/playbooks/vars/defaults/vagrant.yml")
  vsettings = YAML::load_file(settings_file)
  vconfig = vdefaults.merge vsettings
else
  # Feedback
  puts
  puts "No Vlad settings file found (will use default settings)."
  puts
  # Include config from Vlad's default vars only
  vconfig = YAML::load_file(vagrant_dir + "/vlad/playbooks/vars/defaults/vagrant.yml")
end

# Set box configuration options
boxipaddress = vconfig['boxipaddress']
boxname = vconfig['boxname']
synced_folder_type = vconfig['synced_folder_type']
vlad_os = vconfig['vlad_os']

# Detect the current provider and set a variable.
if ARGV[1] and (ARGV[1].split('=')[0] == "--provider" or ARGV[2])
  provider = (ARGV[1].split('=')[1] || ARGV[2])
else
  provider = (ENV['VAGRANT_DEFAULT_PROVIDER'] || :virtualbox).to_sym
end

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Configure virtual machine options.
  config.vm.hostname = boxname
  config.vm.network :private_network, ip: boxipaddress

  # Allow caching to be used (see the vagrant-cachier plugin)
  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :machine
    config.cache.synced_folder_opts = { type: :nfs }
    config.cache.auto_detect = false

    if vlad_os == "centos65"
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
    auto_cpus = 2
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

  if provider == "vmware_fusion"

    # Configure VMWare setup.
    config.vm.provider "vmware_fusion" do |v|
      # Add VMWare box.
      config.vm.box = "hashicorp/precise64"

      v.gui = false
      v.vmx["numvcpus"] = vagrant_cpus
      v.vmx["memsize"] = vagrant_memory
    end

  else

    # Configure VirtualBox setup.
    config.vm.provider "virtualbox" do |v|

      if vlad_os == "centos65"
        # Add a Centos VirtualBox box
        config.vm.box = "hansode/centos-6.5-x86_64"
      elsif vlad_os == "ubuntu14"
        # Add a Ubuntu VirtualBox box
        config.vm.box = "ubuntu/trusty64"
      else
        # Add a Ubuntu VirtualBox box
        config.vm.box = "ubuntu/precise64"
      end

      v.gui = false
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      # Set *provider* VM name (e.g. "myboxname_vlad")
      v.name = boxname + "_vlad"
      v.cpus = vagrant_cpus
      v.memory = vagrant_memory

    end
  end

  if synced_folder_type == 'nfs'

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

    puts "Vlad requires the synced_folder setting to be one of the following:"
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

  # Run an Ansible playbook on setting the box up
  if !File.exist?(vlad_hosts_file)
    config.trigger.before [:up, :resume], :stdout => true, :force => true do
      info "Executing 'up' setup trigger"
      run 'ansible-playbook -i ' + boxipaddress + ', --ask-sudo-pass ' + vagrant_dir + '/vlad/playbooks/local_up.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
    end
  end

   # Run the halt/destroy playbook upon halting or destroying the box
  if File.exist?(vlad_hosts_file)
    config.trigger.before [:halt, :destroy], :stdout => true, :force => true do
      info "Executing 'halt/destroy' trigger"
      run 'ansible-playbook -i ' + vagrant_dir + '/vlad/host.ini --ask-sudo-pass ' + vagrant_dir + '/vlad/playbooks/local_halt_destroy.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
    end
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info "Executing 'up' services trigger"
    run 'ansible-playbook -i ' + vagrant_dir + '/vlad/host.ini ' + vagrant_dir + '/vlad/playbooks/local_up_services.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info 'Vlad setup complete!'
  end

  # Provision vagrant box with Ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = vagrant_dir + "/vlad/playbooks/site.yml"
    ansible.extra_vars = {ansible_ssh_user: 'vagrant'}
    ansible.host_key_checking = false
    ansible.raw_ssh_args = '-o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -o PasswordAuthentication=no -o IdentitiesOnly=yes'
    if vconfig['ansible_verbosity'] != ''
      ansible.verbose = vconfig['ansible_verbosity']
    end
  end

  # Run the custom Ansible playbook (if the custom role exists)
  if File.exist?("../vlad-custom/tasks/main.yml")
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
