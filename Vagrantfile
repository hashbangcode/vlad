# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vlad - Vagrant LAMP Ansible Drupal
# A Drupal development platform in a box, with everything you would need to develop Drupal websites.
# See the readme file (README.md) for more information.
# Contribute to this project at : https://bitbucket.org/philipnorton42/vlad

# Include config from settings.yml
require 'yaml'
vconfig = YAML::load_file("settings.yml")

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

  # Add an Ansible playbooks that executes when the box is destroyed to clear things up.
  if Vagrant.has_plugin?("vagrant-triggers")
    config.trigger.before :destroy, { :execute => "ansible-playbook -i host.ini --ask-sudo-pass playbooks/local_destroy.yml", :stdout => true }
  end

  # Configure virtual machine setup.
  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 1024]
  end

  # Set up NFS drive.
  nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/
  config.vm.synced_folder "./docroot",
    "/var/www/site/docroot", 
    id: "vagrant-root",
    :nfs => nfs_setting,
    create: true

  # SSH Set up.
  config.ssh.forward_agent = true

  # Set machine name.
  config.vm.define :vlad do |t|
  end

  # Provision local environment with ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbooks/local_up.yml"
    ansible.host_key_checking = false
    ansible.ask_sudo_pass = true
    ansible.extra_vars = {local_ip_address:boxipaddress}
    # Optionally allow verbose output from ansible.
    # ansible.verbose = 'vvvv'
  end

  # Provision vagrant box with ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbooks/site.yml"
    ansible.host_key_checking = false
    ansible.extra_vars = {user:"vagrant"}
    # Optionally allow verbose output from ansible.
    # ansible.verbose = 'vvvv'
  end

end
