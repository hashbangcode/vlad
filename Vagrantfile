# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vlad - Vagrant LAMP Ansible Drupal
# A Drupal development platform in a box, with everything you would need to develop Drupal websites.
# See the readme file (README.md) for more information.
# Contribute to this project at : https://bitbucket.org/philipnorton42/vlad

# Find the current vagrant directory.
vagrant_dir = File.expand_path(File.dirname(__FILE__))
vlad_hosts_file = vagrant_dir + '/vlad/host.ini'

# Include config from vlad/settings.yml
require 'yaml'
vconfig = YAML::load_file(vagrant_dir + "/vlad/settings.yml")

# Configuration
boxipaddress = vconfig['boxipaddress']
boxname = vconfig['boxname']

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Configure virtual machine options.
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.box = "vlad"
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

  # Configure virtual machine setup.
  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 1024]
  end

  # Set up NFS drive.
  nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/

  # Setup synced folder for site files
  config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", :nfs => true, create: true, id: "vagrant-webroot"

  # Setup auxiliary synced folder
  config.vm.synced_folder vagrant_dir + "/vlad_aux", "/var/www/site/vlad_aux", :nfs => true, id: "vagrant-aux"

  # SSH Set up.
  config.ssh.forward_agent = true

  # Set machine name.
  config.vm.define :vlad do |t|
  end

  # If vagrant-trigger isn't instaled then exit
  if !Vagrant.has_plugin?("vagrant-triggers")
    puts "Vlad requires the plugin 'vagrant-triggers'"
    puts "This can be installed by running:"
    puts
    puts " vagrant plugin install vagrant-triggers"
    puts
    exit
  end

  # Run an Ansible playbook on setting the box up
  if !File.exist?(vlad_hosts_file)
    config.trigger.before :up, :stdout => true, :force => true do
      run 'ansible-playbook -i ' + boxipaddress + ', --ask-sudo-pass ' + vagrant_dir + '/vlad/playbooks/local_up.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
    end
  end

   # Run the halt/destroy playbook upon halting or destroying the box
   if File.exist?(vlad_hosts_file)
     config.trigger.before [:halt, :destroy], :stdout => true, :force => true do
       run 'ansible-playbook -i ' + vagrant_dir + '/vlad/host.ini --ask-sudo-pass ' + vagrant_dir + '/vlad/playbooks/local_halt_destroy.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
     end
   end

  # Provision vagrant box with Ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = vagrant_dir + "/vlad/playbooks/site.yml"
    ansible.host_key_checking = false
    ansible.extra_vars = {user:"vagrant"}
    if vconfig['ansible_verbosity'] != ''
      ansible.verbose = vconfig['ansible_verbosity']
    end
  end

  # Run the custom Ansible playbook (if it exists)
  if File.exist?("vlad/playbooks-custom/custom/tasks/main.yml")
    config.vm.provision "ansible" do |ansible|
      ansible.playbook = vagrant_dir + "/vlad/playbooks/site-custom.yml"
      ansible.host_key_checking = false
      ansible.extra_vars = {user:"vagrant"}
      if vconfig['ansible_verbosity'] != ''
        ansible.verbose = vconfig['ansible_verbosity']
      end
    end
  end

end
