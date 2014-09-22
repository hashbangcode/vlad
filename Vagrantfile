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

# Default/fallback settings file
settings_file = vagrant_dir + "/vlad/example.settings.yml"

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

# Feedback to confirm which settings file Vagrant will use
puts
puts "Loading settings file: #{settings_file}"
puts

# Include config from settings file
require 'yaml'
vconfig = YAML::load_file(settings_file)

# Set box configuration options
boxipaddress = vconfig['boxipaddress']
boxname = vconfig['boxname']
boxwebaddress = vconfig['webserver_hostname']
synced_folder_type = vconfig['synced_folder_type']

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Configure virtual machine options.
  config.vm.box = "ubuntu/precise64"

  config.vm.hostname = boxname
  config.vm.network :private_network, ip: boxipaddress

  # Allow caching to be used (see the vagrant-cachier plugin)
  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :machine
    config.cache.synced_folder_opts = { type: :nfs }
    config.cache.auto_detect = false
    config.cache.enable :apt
    #config.cache.enable :gem
    #config.cache.enable :npm
  end

  # Set *Vagrant* VM name (e.g. "vlad_myboxname_74826748251406_66388")
  config.vm.define boxname do |boxname|
  end

  # Configure virtual machine setup.
  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 1024]
    # Set *provider* VM name (e.g. "myboxname_vlad")
    v.name = boxname + "_vlad"
  end

  if synced_folder_type == 'nfs'
    # Set up NFS drive.
    nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/

    # Setup synced folder for site files
    config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", type: "nfs", create: true, id: "vagrant-webroot"

    # Setup auxiliary synced folder
    config.vm.synced_folder vagrant_dir + "/vlad_aux", "/var/www/site/vlad_aux", type: "nfs", id: "vagrant-aux"
  elsif synced_folder_type == 'rsync'
    # Setup synced folder for site files
    config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", type: "rsync", create: true, id: "vagrant-webroot"

    # Setup auxiliary synced folder
    config.vm.synced_folder vagrant_dir + "/vlad_aux", "/var/www/site/vlad_aux", type: "rsync", id: "vagrant-aux"
  else
    puts "Vlad requires the synced_folder setting to be one of the following:"
    puts " - nfs"
    puts " - rsync"
    puts
    puts "Please check your settings and try again."
    exit
  end

  # SSH Set up.
  config.ssh.forward_agent = true

  # Run an Ansible playbook on setting the box up
  if !File.exist?(vlad_hosts_file)
    config.trigger.before :up, :stdout => true, :force => true do
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
    run 'ansible-playbook -i ' + vagrant_dir + '/vlad/host.ini ' + vagrant_dir + '/vlad/playbooks/local_up_services.yml'
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info 'Vlad setup complete, you can now access the site through the address http://www.' + boxwebaddress + '/'
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
