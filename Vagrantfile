# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  
  # Configure virtual machine options.
  config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/precise/current/precise-server-cloudimg-amd64-vagrant-disk1.box"
  config.vm.box = "drupaldev"
  config.vm.network :private_network, ip: "192.168.100.100"
  config.vm.hostname = "drupaldev"

  # Allow caching to be used (see the vagrant-cachier plugin)
  config.cache.auto_detect = true

  # Configure virtual machine setup.
  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 1024]
  end

  # Set up NFS drive.
  nfs_setting = RUBY_PLATFORM =~ /darwin/ || RUBY_PLATFORM =~ /linux/
  config.vm.synced_folder "./docroot",
    "/var/www/www.drupal.local/docroot", 
    id: "vagrant-root",
    :nfs => nfs_setting

  # SSH Set up.
  #config.ssh.port = 8888
  #config.vm.network :forwarded_port,
  #  guest: 22,
  #  host: 8888,
  #  id: "ssh",
  #  auto_correct: true
  config.ssh.forward_agent = true

  # Set up port forwarding
  config.vm.network :forwarded_port, 
    guest: 3306,
    host: 3306,
    id: "mysql",
    auto_correct: true

  # Set machine name.
  config.vm.define :drupaldev do |t|
  end

  # Provision with ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbooks/site.yml"
    ansible.host_key_checking = false
    ansible.raw_arguments = '--extra-vars="user=vagrant"'
    # Optionally allow verbose output.
    #ansible.raw_arguments = '--extra-vars="user=vagrant"', "-vvvv"
  end

end