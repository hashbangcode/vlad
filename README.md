Vlad - Vagrant LAMP Ansible Drupal
==================================

A Drupal development platform in a box, with everything you would need to develop Drupal websites.

This includes the following technologies:

* MySQL
* Apache2
* PHP
* Varnish
* Git
* Drush (with the 'site audit' and 'hacked!' modules)
* Munin
* Xdebug
* Ruby (via RVM)
* Sendmail
* Mailcatcher
* Memcached
* Redis
* Adminer
* XHProf
* Solr (Version 4)
* Node.js (including npm)
* ImageMagick
* PimpMyLog

Many of these items can be turned on and off via a settings file.

Prerequesites
-------------

* Vagrant 1.4+ (currently only tested with the VirtualBox provider)
* If you are using VirtualBox then you will need VirtualBox 4.3+
* Ansible (with the Vagrant Ansible Pluigin)

Ansible doesn't currently run on Windows so Vlad will only work on Linux or OSX system.

To install Ansible use the following commands:

    sudo easy_install pip
    sudo pip install ansible

You may have to install some prerequisite python packages first:

    sudo pip install paramiko PyYAML jinja2 httplib2 markupsafe

Vagrant 1.4+ comes with the Ansible provisioning tool included so there is no need to install extra plugins.

You can also install the Vagrant Cachier plugin in order to cache apt-get and gem requests, which speeds reprovisioning up.

    vagrant plugin install vagrant-cachier

Usage
-----

If you already have the needed elements then you can run it. To get up and running use the following:

    vagrant up

You can see the webroot of the Vagrant box by going to the address [www.drupal.local](http://www.drupal.local/). A local Ansible action will add an entry to your hosts file for the IP address 192.168.100.100 so you don't need to alter it.

To access the vagrant box use:

    vagrant ssh

To install Drupal 7 on the box log in (using 'vagrant ssh') and run the script /var/www/drupal7_install.sh. To clone the latest version of Drupal 8 and install you can run the script /var/www/drupal8_install.sh. The admin username for both Drupal installs is 'admin' and the password is 'password'. For best results you should run these scripts with sudo.

Once done use the following to throw everything away:

    vagrant destroy

Additional
----------

The default IP address of the Vagrant box is 192.168.100.100.

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
You'll need to kick off XHProf on your site using "?_profile=1" at the end of the URL. Like this: [http://www.drupal.local/?_profile=1](http://www.drupal.local/?_profile=1).

You can access PimpMyLog via the following URL:
[http://logs.drupal.local/](http://logs.drupal.local/)

Solr can be viewed and configured through the Tomcat6 server via [http://www.drupal.local:8081/solr](http://www.drupal.local:8081/solr). A default collection of 'vlad' has been created and is available at [http://www.drupal.local:8081/solr/vlad](http://www.drupal.local:8081/solr/vlad). This Solr server uses the default configuration available for Solr 4 from the [search_api_solr](https://drupal.org/project/search_api_solr) module.

The Varnish secret key for the box is 04788b22-e179-4579-aac7-f3541fb40391, you will need this when using the Vagrant modules.

Running Ansible Outside Vagrant
-------------------------------

During the setup process a file called host.ini will be created in the main Vlad directory. This file contains all the information Ansible needs to interact with the Vagrant box. If you want to run the Ansible playbook outside of Vagrant you can run the following command.

    ansible-playbook -i host.ini playbooks/site.yml

Tags have been included into the playbooks to allow different parts to be run individually. For example to (re)run the varnish playbook use the following command.

    ansible-playbook -i host.ini -t varnish playbooks/site.yml

To run multiple tags just use a comma separated list of tags like this:

    ansible-playbook -i host.ini -t varnish,apache2 playbooks/site.yml

Possible tags are: adminer,apache2,aptget,drupalinstall,drush,local,mailcatcher,memcached,munin,mysql,pear,phing,pimpmylog,php,redis,sendmail,solr,test,ssh,varnish,xdebug,xhprof

Settings
--------

A file called settings.yml is used to configure the Vagrant box. This allows you to control everything but the IP address of the box.

For example, to install Solr on the box go into the settings file and change the solr_install parameter from this:

    solr_install: "n"

To this:

    solr_install: "y"

The default behaviour of the box is to install a Varnish server that proxies an Apache HTTP server. By turning on and off the software install on the machine and configuring the ports used it is possible to create a settings file that has the setup you want.

Testing
-------

Before running the install Vlad does a couple of checks to make sure that it has the settings it needs to run the rest of the install process.

Once Ansible has set up the box a testing task is run. This checks to ensure that everything that was selected to be installed has been.

These tests were added partly to give confidence that the box has been setup correctly, and also to allow for new future development work to progress without having to manually check that things still work every time a change is made.

It is possible to run the tests manually by using the 'test' tag like this:

    ansible-playbook -i host.ini -t test playbooks/site.yml

Notices
-------

This box was originally developed by Phil Norton ([@philipnorton42](http://www.twitter.com/philipnorton42)) for use with the site [#! code](http://www.hashbangcode.com/).

Thanks to [Mike Bell](http://mikebell.io/) for some of the Vagrant configuration settings.
Thanks to [Michael Heap](http://michaelheap.com/) for introducing me to Ansible.
Thanks to [Jeremy Coates](http://www.twitter.com/phpcodemonkey) for the local action tip for hosts file updating.

Feel free to use this project in your own Drupal builds.

All feedback very much appreciated :)
