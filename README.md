Vlad - Vagrant LAMP Ansible Drupal
==================================

A Drupal development platform in a box, with everything you would need to develop Drupal websites.

This includes the following technologies:

* MySQL
* Apache2
* PHP
* Varnish
* Git
* Drush
* Drush extensions: Site Audit, Hacked! & Registry Rebuild
* Munin
* Xdebug
* Ruby
* rbenv
* Sendmail
* Mailcatcher
* Memcached
* Redis
* Adminer
* XHProf
* Solr (Version 4)
* Node.js
* ImageMagick
* PimpMyLog

Many of these items can be turned on and off via a settings file.

Prerequisites
-------------

* Vagrant 1.4+ (currently only tested with the VirtualBox provider)
* If you are using VirtualBox then you will need VirtualBox 4.3+
* Ansible (with the Vagrant Ansible Plugin)

Vlad currently only works on Linux or OS X systems (Windows support for Ansible has only recently been added).

To install Ansible use the following commands:

    sudo easy_install pip
    sudo pip install ansible

You may have to install some prerequisite python packages first:

    sudo pip install paramiko PyYAML jinja2 httplib2 markupsafe

Vagrant 1.4+ comes with the Ansible provisioning tool included so there is no need to install extra plugins.

You can also install the Vagrant Cachier plugin in order to cache apt-get and gem requests, which speeds up reprovisioning.

    vagrant plugin install vagrant-cachier

To support deprovisioning you also need to install the Vagrant Triggers plugin.

If you already have the needed elements then you can get started.

Usage
-----

When you first download Vlad you will be unable to do anything with it as the system requires the use of a settings.yml file. In the 'vlad' directory, copy & rename the example.settings.yml file to settings.yml - you can then tweak it to suit your needs. This renaming process is intended to allow you to update your version of Vlad without overwriting your current project files or settings.

Out of the box you will get the following Vagrant box options:

    webserver_hostname: 'drupal.local'
    webserver_hostname_alias: 'www.{{ webserver_hostname }}'

    # Vagrantfile configuration

    boxipaddress: "192.168.100.100"
    boxname: "vlad"

Tweak the above settings if you want to create a separate project that uses Vlad as a template.

With the settings.yml file in place you can get up and running using the following command:

    vagrant up

Setting up the box takes a few minutes but there is plenty of output to look at whilst Ansible runs through the provisioning steps. You can see the webroot of the Vagrant box by going to the address [www.drupal.local](http://www.drupal.local/). A local Ansible action will add an entry to your hosts file for the relevant IP address (set via settings.yml).

Note: You will be asked for your sudo password on two separate occasions. The first is used by Vagrant to setup a NFS share and the second is used by Ansible to alter your local hosts file so that you can easily access the box via a web browser.

To access the vagrant box use the following command:

    vagrant ssh

To install Drupal 7 on the box log in (using 'vagrant ssh') and run the script /var/www/drupal7_install.sh. To clone the latest version of Drupal 8 and install you can run the script /var/www/drupal8_install.sh. The admin username for both Drupal installs is 'admin' and the password is 'password'.

If you have changed any of the settings and want to re-provision the box then run the following command:

    vagrant provision

If you change any Vagrant settings (e.g. changing the memory in the box) you'll need to reload the box with the following command:

    vagrant reload

To temporarily shutdown the box use the following command:

    vagrant halt

To delete the box and the data it contains run the following command:

    vagrant destroy

When you run 'vagrant up' again you will get back the original box.

Settings
--------

A file called settings.yml is used to configure the Vagrant box.

For example, to install Solr on the box go into the settings file and change the solr_install parameter from this:

    solr_install: "n"

To this:

    solr_install: "y"

The default behaviour of the box is to install a Varnish server that proxies an Apache HTTP server. By turning on and off the software install on the machine and configuring the ports used it is possible to create a settings file that has the setup you want.

Additional
----------

The default IP address of the Vagrant box is 192.168.100.100 - this can be changed via settings.yml.

Mailcatcher is installed as a default mail server for PHP and will therefore intercept all email sent through any website installed on the Vagrant guest. You can access MailCatcher via the following URL:
[http://www.drupal.local:1080/](http://www.drupal.local:1080/)

You can access Adminer via the following URL:
[http://adminer.drupal.local/](http://adminer.drupal.local/)

Adminer will automatically log you into the database when you open it. The local MySQL user details are as follows:
Username: vlad
Password: wibble

Xdebug has been configured to allow code profiling. You can activate this using the XDEBUG_PROFILE=true parameter ar the end of the URL. Like this: [http://www.drupal.local/?XDEBUG_PROFILE=true](http://www.drupal.local/?XDEBUG_PROFILE=true).
The profile output can be found in the directory /tmp/xdebug_profiles on the Vagrant guest.

You can access XHProf via the following URL:
[http://xhprof.drupal.local/](http://xhprof.drupal.local/)
You'll need to kick off XHProf on your site using "?_profile=1" at the end of the URL. Like this: [http://www.drupal.local:8080/?_profile=1](http://www.drupal.local:8080/?_profile=1) (notice we call the URL using port 8080, the Apache port, to avoid Varnish taking over).

You can access PimpMyLog and view log data via the following URL:
[http://logs.drupal.local/](http://logs.drupal.local/)

Solr can be viewed and configured through the Tomcat6 server via [http://www.drupal.local:8081/solr](http://www.drupal.local:8081/solr). A default collection of 'vlad' has been created and is available at [http://www.drupal.local:8081/solr/vlad](http://www.drupal.local:8081/solr/vlad). This Solr server uses the default configuration available for Solr 4 from the [search_api_solr](https://drupal.org/project/search_api_solr) module.

The Varnish secret key for the box is 04788b22-e179-4579-aac7-f3541fb40391, you will need this when using the Vagrant modules.

Wiki
----

Find out more about Vlad and how to contribute via the Wiki pages at [https://github.com/hashbangcode/vlad/wiki](https://github.com/hashbangcode/vlad/wiki).
