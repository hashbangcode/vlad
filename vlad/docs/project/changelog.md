# Changelog

## Version 0.10.0

### BREAKING CHANGE

- Moved to using boolean values (true/false) for settings variables in place of "y"/"n" strings.
    - This will break previous installations until settings files are adapted accordingly.
    
### Non-breaking changes

- Added a docs directory, which contains ongoing documentation for the Vlad project.
- Added multi operating system support.
- Added CentOS support
- Added Ubuntu 14 support.
- Fixed issues in XHProf install.
- Numerous minor bug fixes, formatting issues and standards updates.

## Version 0.9.0

- Updated repository links and documentation to point at github.
- Updated the version of apachesolr and search_api_solr modules that were being downloaded to the latest.
- Added the VersionControl_Git package as part of the phing install, also forced pear to download stable releases.
- Added a clause to prevent the http_port and the varnish_http_port from being the same (if both items are installed).
- Added clause to site.yml file to allow varnish to be removed if it's been previously installed.
- Updated the Vagrantfile to use a Vagrant Share box image rather than a box_url.
- Added licence.txt document.
- Added option to allow either NFS or rsync to be used.
- Updated the pimpmylog role to use a2ensite when creating the logs site.
- Updated apache task to disable the default apache site.
- Updated the hosts test to test for the existence of the sites internally, rather than potentially relying on a broken hosts file.
- Added lazy loading of different settings files.
- Several changes to improve the idempotency of tasks.
- Switched to rbenv for Ruby management (from RVM).
- Updated Mailcatcher to use rbenv when installing and running.
- Update of formatting and information on default index.php file.
- Numerous minor bug fixes, formatting issues and standards updates.

## Version 0.8.6

- Fix for Issue #74. Duplicate parameters in MySQL role causing errors.

## Version 0.8.5

- Added ruby as being installed by default with an additional pre-build check for ruby when installing Mailcatcher.

## Version 0.8.4

- Allowed ssh identities to be passed from host to box (Issue #37).
- Added additional up trigger to ensure all services are restarted when the box is started (Issue #43).
- Added Vlad release version file (Issue #50).
- Added new holding page (Issue #52).
- Fixed Mailcatcher install (Issue #53).
- PimpMyLogs config is now done automatically (Issue #55).
- Added git global credentials (Issue #56).
- PHP Uploadprogress PECL package is now optional (Issue #58).

## Version 0.8.3

- Tweaked the Varnish default.vcl file and updated the Varnish Ansible task to restart Varnish if this file was updated.
- Fixed a bug in the Ansible ssh options that caused them not to be translated correctly.
- Small documentation change.

## Version 0.8.2

- Changed 'aux' directory to be 'vlad_aux'.
- Added ssh options to allow Ansible playbooks to run.
- Added 'add_index_file' option to control the creation of an index.php file in the webroot.
- Fixed a bug in Vagrantfile that stopped the triggers running.

## Version 0.8.1

- Made vagrant-triggers a requirement of running Vlad.
- Updated Solr to version 4.7.2
- Added HTTPS support.
- Added PECL uploadprogress.
- Added some clauses to try and catch incorrect settings being used with Apache and Varnish.
- Added option to import a database file into the default database on 'vagrant up'.

## Version 0.8

- Added ability to use custom playbooks within Vlad.
- Added /aux directory and internal directory structure.
- Added option to set Ansible verbosity via the settings file.
- Added support for Vagrant share.
- Changed the Vagrant file to use the new vagrant-triggers syntax.
- Moved Vlad into it's own directory.
- Added vlad-rsync script to allow other projects easy update to newer versions of vlad.
- Minor tweaks to comments and documentation.
- Adding destroy trigger check to vagrant file.
- Update of Solr to version 4.7.1
- Fix slight bug in PHP memcache install as directory version has changed.
- Numerous minor bug fixes and improvements.

## Version 0.7.5

- Added vagrant-triggers plugin support.
- Added option to specify webroot directory from settings.yml.
- Documentation updates and removal of items into the Wiki to simplify main readme file.
- Some minor enhancements.

## Version 0.7.4

- Changed MySQL setup in order to allow remote access via tools like sequel pro.

## Version 0.7.3

- Update of Vagrant and settings.yml file and tweaks to the readme file.
- Change of Vagrantfile to include settings from the settings.yml file.
- Documentation updates.

## Version 0.7.2

- Documentation updates.
- Rework of Solr install.
- Fixed errors in main readme.

## Version 0.7.1

- Added option for localhosts file location.
- Added initial support for post destroy actions.
- Tweaks to the Solr install.
- Added option to fail build if an incorrect Solr/Drupal integration module was found.
- Added ability to switch between Solr/Drupal integration via Search API module or via ApacheSolr module.
- Change to make PHP errors turned on as a default.
- Moved Vagrantfile example.Vagrantfile and settings.yml into example.settings.yml
- Altering mail catcher to allow install via gem and install via RVM.
- Added PimpMyLog to view log output.
- Added Node.js support.
- Added ImageMagick support.
- Stopping /batch from having xhprof output applied to it as it breaks Drupal batch runs.
- Removing duplicate configuration entries for php execution time.
- Removed install routines & tests for rubygems, rake & bundler (will be handled via RVM).
- Minor bug fixes and documentation updates.

## Version 0.7

- Added RVM support and removed CSS tools support.
- Changed mailcatcher to also use RVM instead of default gems.
- Adding tests for ruby installed components.
- Fix for issue no. 12. Adding fix to memcached install to notify apache once install is complete (thanks https://bitbucket.org/s7anley) for the fix.

## Version 0.6.4

- Changed the vagrant-cachier nfs setting.
- Changed the default index.php file to a templated version that only gets included when a file called index.php doesn't already exist in the docroot directory.
- Added some documentation to the Drupal install scripts.

## Version 0.6.3

- Correcting small drush reference error in drupal 8 install script.
- Making PHP 5.4 the default install option as Drush and Drupal 8 requires this.
- Small tidy up of the main .gitignore file.
- docroot/index.php file -> Formatting, moving items around, adding a description of Solr.

## Version 0.6.2

- Fix for issue no. 7 Changed tests for different setups of Apache and Vagrant.

## Version 0.6.1

- Updating Solr to version 4.7.0

## Version 0.6

- Added Redis.
- Moved some of the settings around to allow easier customisation of the box.
- Tweaked the vagrant-cachier settings.
- Added post install tests.
- Fixed some more Drush elements.
- Added a test task that is run as a post task to setting up the box.
- Moved all settings into a single settings.yml file.
- Allowed certain components to be turned on and off via the settings.yml file.
- Added a always_run flag to the tasks that need to be run in order to allow the --check flag to execute cleanly.
- Added support for selecting between PHP 5.3 and PHP 5.4.
- Minor bug fixes.
- Documentation updates.

## Version 0.5.10
-
- Minor bug fixes.

## Version 0.5.9

- Split apart Drush and Pear installs into separate playbooks.
- Changed Drush to use a Composer based install.
- Split out Admirer and Xhpof from Apache role into two separate roles.
- Moved CSS tasks into a separate role.
- Minor bug fixes.
- Documentation updates.

## Version 0.5.8

- Added tags support to playbooks.
- Added instructions on using tags to the readme file.
- Minor bug fixes.

## Version 0.5.7

- Documentation updates.
- Added the creation of host.ini files for use with Ansible (re)provisioning outside of Vagrant.

## Version 0.5.6

- Re-enabled the sendmail playbook.
- Rake is now a requirement of installing respond-to so added that as an installed package.
- Added python-mysqldb requirement to xhprof playbook.
- Changed drupal_install script to drupal7_install and drupal8_install script.

## Version 0.5.5

- Added LESS support.
- Minor bug fixes.
- Documentation changes.

## Version 0.5.4

- Split out sendmail and mailcatcher into separate roles.
- Documentation changes.

## Version 0.5.3

- Bug fix release.

## Version 0.5.2

- Changed the sub-directory structure for Adminer and Xhprof into sub-domains.

## Version 0.5.1

- Bug fix release.

## Version 0.5

- Added Munin.
- Split apart Apache and Varnish configurations.
- Created a main handlers file and moved generic service handlers into it.
- Bug fixes.

## Version 0.4

- Added Solr support
- Moved the web folder from 'www.drupal.local' to 'site'.
- Abstracted out variables into a general variables file.
- Added atop and vim support.
- Added local actions to update hosts file with box addresses.
- Fixed error in Adminer index file and changed the Adminer css file to a different theme.

## Version 0.3

- Added Composer support.
- Added correct configuration option for verbose ansible.
- Removing deprecated 'only_if' setting and replacing with 'when'.
- Minor bug fixes.

## Version 0.2.5

- Added profiling support to xdebug ini and updated drupal install script.
- Update of index.php file to give better documentation.
- Added Phing support.
- Default max file upload size is now 100MB.
- Added instructions for Vagrant cache and Xhprof in the readme file.

## Version 0.2.4

- Added in graphviz dot options for xhprof configuration.

## Version 0.2.3

- Update of support for vagrant-cachier to allow Vlad to run without the plugin.

## Version 0.2.2

- Added vagrant-cachier support.

## Version 0.2.1

- Added Drupal install scripts.
- Added Xhprof to readme.
- Fixed some bugs in Xhprof setup.

## Version 0.2

- Added Xhprof support

## Version 0.1

- Initial release.
