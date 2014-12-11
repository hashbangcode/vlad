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
box = vconfig['vm_box']
box_url = vconfig['box_url']

# SMB credentials (Windows only)
samba_username = vconfig['smb_username']
samba_password = vconfig['smb_password']

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

# Use rbconfig to determine if we're on a windows host or not.
require 'rbconfig'
is_windows = (RbConfig::CONFIG['host_os'] =~ /mswin|mingw|cygwin/)

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Choose your virtual machine
  config.vm.box = box
  config.vm.box_url = box_url
  
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
    config.cache.enable :apt
  end

  # Set *Vagrant* VM name (e.g. "vlad_myboxname_74826748251406_66388")
  config.vm.define boxname do |boxname|
  end

  # Configure virtual machine setup.
  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
		# Recommended to set memory to (at least) 1/4 of your host machine RAM
    v.customize ["modifyvm", :id, "--memory", 2048]
		# Recommended to set cpus to 2 if possible, otherwise comment it out leaving the default (1)
    v.customize ["modifyvm", :id, "--cpus", 2]
    v.customize ["modifyvm", :id, "--ioapic", "on"]
    # fix VirtualBox problem with symlinks on shared folders
    #v.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
    # modern chipset
    v.customize ["modifyvm", :id, "--chipset", "ich9"]
    # more video memory
    v.customize ["modifyvm", :id, "--vram", "32"]
    # Set *provider* VM name (e.g. "myboxname_vlad")
    v.name = boxname + "_trusty_on_windows"
  end

  if is_windows
    # Setup auxiliary synced folder
    config.vm.synced_folder vagrant_dir + "/vlad_aux", "/var/www/site/vlad_aux", 
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
    config.vm.synced_folder vagrant_dir + "/vlad_aux", "/var/www/site/vlad_aux", type: "nfs", id: "vagrant-aux"
  elsif synced_folder_type == 'rsync'
    # Setup synced folder for site files
    config.vm.synced_folder vconfig['host_synced_folder'], "/var/www/site/docroot", type: "rsync", create: true, id: "vagrant-webroot"

    # Setup auxiliary synced folder
    config.vm.synced_folder vagrant_dir + "/vlad_aux", "/var/www/site/vlad_aux", type: "rsync", id: "vagrant-aux"
  else
    puts "Vlad in *nix requires the synced_folder setting to be one of the following:"
    puts " - nfs"
    puts " - rsync"
    puts
    puts "Please check your settings and try again."
    exit
  end

  # SSH Set up.
  config.ssh.forward_agent = true

  # Run an Ansible playbook on setting the box up
	config.trigger.before :up, :stdout => true, :force => true do
		info "Executing 'up' setup trigger"
		if !File.exist?(vlad_hosts_file)
			if is_windows
				system("cp " + vagrant_dir + "/vlad/playbooks/templates/host.j2 " + vlad_hosts_file)
				system("echo # Vlad >> " + vconfig['hosts_file_location'])
				system("echo " + boxipaddress + " www." + boxwebaddress + " adminer." + boxwebaddress + " xhprof." + boxwebaddress + " logs." + boxwebaddress + " >> " + vconfig['hosts_file_location'])
	 	  else
      	run 'ansible-playbook -i ' + boxipaddress + ', --ask-sudo-pass ' + vagrant_dir + '/vlad/playbooks/local_up.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
    	end
    end
  end

   # Run the halt/destroy playbook upon halting or destroying the box
  if File.exist?(vlad_hosts_file)
    config.trigger.before [:halt, :destroy], :stdout => true, :force => true do
      info "Executing 'halt/destroy' trigger"
		  if is_windows
			  run_remote 'ansible-playbook -i /vagrant/vlad/host.ini /vagrant/vlad/playbooks/local_halt_destroy.yml --extra-vars "is_windows=true local_ip_address=' + boxipaddress + '" --connection=local'
		  else
  	    run 'ansible-playbook -i ' + vagrant_dir + '/vlad/host.ini --ask-sudo-pass ' + vagrant_dir + '/vlad/playbooks/local_halt_destroy.yml --extra-vars "local_ip_address=' + boxipaddress + '"'
  	  end
    end
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info "Executing 'up' services trigger"
	  if is_windows
	    run_remote 'ansible-playbook -i ' + boxipaddress + ', /vagrant/vlad/playbooks/local_up_services.yml --extra-vars "is_windows=true local_ip_address=' + boxipaddress + '" --connection=local'
	  else
	    run 'ansible-playbook -i ' + vagrant_dir + '/vlad/host.ini ' + vagrant_dir + '/vlad/playbooks/local_up_services.yml'
  	end
  end

  config.trigger.after :up, :stdout => true, :force => true do
    info 'Vlad setup complete, you can now access the site through the address http://www.' + boxwebaddress + '/'
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

  # Run the custom Ansible playbook (if it exists)
  if File.exist?("vlad/playbooks-custom/custom/tasks/main.yml")
	  if is_windows
  		# Provisioning configuration for shell script.
  		config.vm.provision "shell" do |sh|
   			sh.path = vagrant_dir + "/vlad/scripts/ansible-run-remote.sh"
    		sh.args = "/vlad/playbooks/site-custom.yml " + boxipaddress + ','
  		end
  	else
    	config.vm.provision "ansible" do |ansible|
      	ansible.playbook = vagrant_dir + "/vlad/playbooks/site-custom.yml"
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
