Vagrant Ansible Drupal development

This includes the following technologies:
* MySQL
* Apache2
* PHP
* Varnish
* Git
* Drush
* Munin
* Xdebug
* SASS
* Sendmail
* Memcached

To get up and running use the following:

    vagrant init
    vagrant up

By adding the following rule to your hosts file you can view the sites test file using www.drupal.local
192.168.100.100 www.drupal.local

To access the vagrant box use:

    vagrant ssh

Once done use the following to throw everything away:

    vagrant destroy

This box was originally developed by Phil Norton ([@philipnorton42](http://www.twitter.com/philipnorton42)) for use with the site [#! code](www.hashbangcode.com)

Thanks to Mike Bell for some of the Vagrant configuration settings.