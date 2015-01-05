# Usage

When you first download Vlad you will be unable to do anything with it as the system requires the use of a settings.yml file (kept within the vlad directory). Rename the example.settings.yml file to settings.yml and tweak the settings.yml file to suit your needs. This renaming process is intended to allow you to update your version of Vlad without overwriting your current project files or settings.

Out of the box you will get the following options:

    webserver_hostname: 'drupal.local'
    webserver_hostname_alias: 'www.{{ webserver_hostname }}'

    # Vagrantfile configuration

    boxipaddress: "192.168.100.100"
    boxname: "vlad"

Tweak the above settings if you want to create a separate project that uses Vlad as a template.

With the settings.yml file in place you can get up and running using the following command:

    vagrant up

Setting up the box takes a few minutes but there is plenty out output to look at whilst Ansible runs through the provisioning steps. You can see the webroot of the Vagrant box by going to the address [www.drupal.local](http://www.drupal.local/). A local Ansible action will add an entry to your hosts file for the default IP address 192.168.100.100 so you don't need to alter it.

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

## Additional

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

You can access PimpMyLog and view log data via the following URL:
[http://logs.drupal.local/](http://logs.drupal.local/)

Solr can be viewed and configured through the Tomcat6 server via [http://www.drupal.local:8081/solr](http://www.drupal.local:8081/solr). A default collection of 'vlad' has been created and is available at [http://www.drupal.local:8081/solr/vlad](http://www.drupal.local:8081/solr/vlad). This Solr server uses the default configuration available for Solr 4 from the [search_api_solr](https://drupal.org/project/search_api_solr) module.

The Varnish secret key for the box is 04788b22-e179-4579-aac7-f3541fb40391, you will need this when using the Vagrant modules.

## Settings

A file called settings.yml is used to configure the Vagrant box. This allows you to control everything but the IP address of the box.

For example, to install Solr on the box go into the settings file and change the solr_install parameter from this:

    solr_install: false

To this:

    solr_install: true

The default behaviour of the box is to install a Varnish server that proxies an Apache HTTP server. By turning on and off the software install on the machine and configuring the ports used it is possible to create a settings file that has the setup you want.

## Drush

Both Drush 6.x (stable) and 7.x (dev) are installed on the Vagrant box. The 6.x version will run by default, when you run `drush`. To access the 7.x version, required for Drupal 8, use the alias `drush-master`.
