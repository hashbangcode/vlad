# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vlad - Vagrant LAMP Ansible Drupal
# A Drupal development platform in a box, with everything you would need to develop Drupal websites.
# See the readme file (README.md) for more information.
# Contribute to this project at : https://bitbucket.org/philipnorton42/vlad

# Configuration
boxipaddress = "192.168.100.100"
boxname = "vlad"

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
    config.cache.auto_detect = true
    config.cache.enable :apt
    config.cache.enable :gem
    config.cache.enable_nfs  = true
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
    :nfs => nfs_setting

  # SSH Set up.
  config.ssh.forward_agent = true

  # Set up port forwarding
  config.vm.network :forwarded_port, 
    guest: 3306,
    host: 3306,
    id: "mysql",
    auto_correct: true

  # Set machine name.
  config.vm.define :vlad do |t|
  end

  # Provision local environment with ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbooks/local.yml"
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
