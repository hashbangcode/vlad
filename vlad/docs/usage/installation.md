# Installation

This page talks you through installing the components needed to get up and running with Vlad.

## Prerequesites

Vlad has a number of prerequisites that need to be met before things will work correctly.

- Vagrant 1.4+
- If you are using VirtualBox as your virtual machine provider then you will need VirtualBox 4.3+
- The vagrant-triggers plugin.
- Ansible 1.6+

Vlad has been tested as working on Linux and OS X platforms, but Windows is currently unsupported. Vlad has been tested with the VirtualBox and VMware Fusion providers and as such other providers are currently not supported.

### Vagrant

Vagrant 1.4+ comes with the Ansible provisioning tool included so there is no need to install extra plugins. If you have installed the Ansible plugin separately then you may find that Vlad doesn't build correctly.

The vagrant-triggers plugin is used to run certain actions during the up, halt and destroy actions in Vagrant. This plugin is a requirement of Vlad and must be installed. You can install it with the following command.

    vagrant plugin install vagrant-triggers

You can also install the vagrant-cachier plugin in order to cache apt-get and gem requests, which speeds up reprovisioning. This isn't a requirement but can vastly reduce the amount of time it takes to recreate a machine. You can install this plugin with the following command.

    vagrant plugin install vagrant-cachier

If you already have the needed elements then you can get started.

### Ansible

Ansible is the provisioning system that Vlad uses.

To install Ansible use the following commands:

    sudo easy_install pip
    sudo pip install ansible

You may have to install some prerequisite Python packages first. "pip" (a Python package manager) should install these packages automatically so you only need to run this line if the Ansible install fails.

    sudo pip install paramiko PyYAML jinja2 httplib2 markupsafe

## Installation

When you first download Vlad you will be unable to do anything with it as the system requires the use of a vlad/settings.yml file. Rename the example.settings.yml file to settings.yml and tweak the settings.yml file to suit your needs. This renaming process is intended to allow you to update your version of Vlad without overwriting your current project files or settings.

Out of the box you will get the following options:

    webserver_hostname: 'drupal.local'
    webserver_hostname_alias: 'www.{{ webserver_hostname }}'

    # Vagrantfile configuration

    boxipaddress: "192.168.100.100"
    boxname: "vlad"

This will create a box called "vlad_vlad" in your VirtualBox interface. If you were to change the boxname to "nosferatu" then the box name would be "nosferatu_vlad". This allows you to see at a glance what projects you have in VirtualBox that are derived from Vlad.

### Gotchas:

#### vagrant-cachier dependencies (nokogiri)

If you find an error about installing nokogiri whilst installing vagrant-cachier then you can get around this by installing nokogiri separately. First, you'll need to install some dependencies:

    sudo apt-get install ruby-dev ruby-libxml libxml2-dev libxslt1-dev
    
Next, to install nokogiri you need to use the system libraries, like this:

    sudo gem install nokogiri --use-system-libraries

However, you only need to run the above steps to install nokogiri if you can't install vagrant-cachier normally.
