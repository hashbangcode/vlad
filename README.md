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
* SASS
* Sendmail
* Mailcatcher
* Memcached
* Adminer
* XHProf
* Solr (Version 4)

Prerequesites
-------------

* Vagrant (currently only VirtualBox tested)
* Ansible (with the Vagrant Ansible Pluigin)

To install Ansible use the following commands (tested on OSx):

    sudo easy_install pip
    sudo pip install ansible

Then install the Vagrant Ansible plugin

    vagrant plugin install ansible

You can also install the Vagrant Cachier plugin in order to cache apt-get and gem requests.

    vagrant plugin install vagrant-cachier

Usage
-----

If you already have the needed elements then you can run it. To get up and running use the following:

    vagrant up

You can see the webroot of the Vagrant box by going to the address [www.drupal.local](http://www.drupal.local/). A local Ansible action will add an entry to your hosts file for the IP address 192.168.100.100 so you don't need to alter it.

To access the vagrant box use:

    vagrant ssh

To install Drupal on the box log in (using 'vagrant ssh') and run the script /var/www/drupal_install.sh. The admin username is 'admin' and the password is 'password'.

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

Solr can be viewed and configured through the Tomcat6 server via [http://www.drupal.local:8081/solr](http://www.drupal.local:8081/solr). A default collection of 'vlad' has been created and is available at [http://www.drupal.local:8081/solr/vlad](http://www.drupal.local:8081/solr/vlad). This Solr server uses the default configuration available for Solr 4 from the [search_api_solr](https://drupal.org/project/search_api_solr) module.

Notices
-------

This box was originally developed by Phil Norton ([@philipnorton42](http://www.twitter.com/philipnorton42)) for use with the site [#! code](http://www.hashbangcode.com/).

Thanks to [Mike Bell](http://mikebell.io/) for some of the Vagrant configuration settings.
Thanks to [Michael Heap](http://michaelheap.com/) for introducing me to Ansible.
Thanks to [Jeremy Coates](http://www.twitter.com/phpcodemonkey) for the local action tip for hosts file updating.

Feel free to use this project in your own Drupal builds.

All feedback very much appreciated :)
