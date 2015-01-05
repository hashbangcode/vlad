# Installing Drupal

Different versions of Drupal can be installed by scripts that are available on the box.

To install Drupal 7 you need to run the /var/www/drupal7_install.sh script. This will download the latest version of Drupal 7 and install it into the MySQL database available on Vlad using the "Standard" installation profile. The Overlay module is also uninstalled automatically.

To install Drupal 8 you need to run the /var/www/drupal8_install.sh script. This will pull the latest version of Drupal 8 from the Drupal git repository and install it into the MySQL database available on Vlad.

User 1's login details for each of these Drupal install scripts is as follows:

Username: admin
Password: password

NOTE: Both of these scripts will remove anything already in the /var/www/sites/docroot directory (or whatever name you have selected for it) so be careful.

# Drush

Vlad comes with both Drush 6 (current) and Drush 7 (dev) versions. This means you can run Drush commands against a Drupal 8 install.

To run the current version of Drush just using the drush command as you normally would.

    drush status

To run the dev version of Drush you need to use either the `drush-master` or `drush7` alias in the same way as you would normally run Drush.

    drush-master status
    
    drush7 status
