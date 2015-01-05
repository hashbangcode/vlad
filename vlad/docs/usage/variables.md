The following variables can be set in the settings.yml file.


### Webserver settings

__webserver_hostname__

The hostname of the site you are about to create. By default this is then combined with the variable webserver_hostname_alias to add 'www' to the start.

default value: 'drupal.local'
 
__webserver_hostname_alias__

This is the fully qualified name of the server.

default value: 'www.{{ webserver_hostname }}'

### Vagrantfile configuration

__boxipaddress__

The IP address of the virtual machine.

default value: "192.168.100.100"

__boxname__

The name of the box that will be used by Vagrant to label the box inside your virtual machine manager of choice. This will be translated to boxname + "_vlad" in said virtual box manager.
  
default value: "vlad"

__host_synced_folder__

This is the directory that will be used to server the files from. If this doesn't exist then it will be created.

default value: "./docroot"

### Install components:

The server components that will be installed when the box is provisioned.
- To install a component set it to true.
- To leave a component out of the install set the value to false.

__adminer_install__

Install

default value: true

__apache_install__

Install

default value: true

__imagemagick_install__

Install

default value: false

__mailcatcher_install__

Install

default value: true

__memcached_install__
       
Install

default value: false

__munin_install__

Install

default value: false

__mysql_install__

Install

default value: true

__node_install__
            
Install

default value: false

__php_install__
             
Install

default value: true

__pimpmylog_install__
                   
Install

default value: true

__redis_install__
               
Install

default value: false

__ruby_install__
              
Install

default value: true # Ruby is required by MailCatcher

__sendmail_install__
                  
Install

default value: true

__solr_install__

Install

default value: false

__varnish_install__
                 
Install

default value: true # If you turn this off then make sure you set the http_port to be 80.

__xhprof_install__
                
Install

default value: false

### Provision with custom role

__custom_provision__

Run custom roles. See the [custom roles](../usage/custom_roles.md) section for more information.

default value: false

### General HTTP Port Variables

__http_port__

HTTP port for the web server. If you have turned off Varnish then you might want to set this to "80".

default value: 8080

__varnish_http_port__

HTTP port for the Varnish cache.

default value: 80

### Administration email

__admin_mail__

Used in instances when a server email is needed.

default value: 'test@example.com'

### PHP Settings

__php_version__

PHP Version, can be one of "5.3" or "5.4". Vlad will error when a version that isn't understood is used

default value: "5.4"

### #php.ini settings

__php_memory_limit__

default value: 512M

__php_max_execution_time__

default value: 60

__php_post_max_size__

default value: 100M

__php_upload_max_filesize__

default value: 100M

__php_display_errors__

default value: On

__php_display_startup_errors__

default value: On

__php_html_errors__

default value: On

__php_date_timezone__

default value: Europe/London

### #Install PECL uploadprogress

__php_pecl_uploadprogress__

default value: true

### #PHP APC Settings

__apc_rfc1867__

default value: '1'

__apc_shm_size__

default value: '256M'

__apc_shm_segments__

default value: '1'

__apc_num_files_hint__

default value: '0'

###  MySQL Settings
__mysql_port__

default value: 3306

__mysql_root_password__

default value: sdfds87643y5thgfd

__server_hostname__

default value: vlad

__dbname__

default value: vladdb

__dbuser__

default value: vlad

__dbpass__

default value: wibble

### # MySQL my.cnf settings

__mysql_max_allowed_packet__

default value: 128M

__innodb_file_per_table__

default value: innodb_file_per_table

__mysql_character_set_server__

default value: utf8

__mysql_collation_server__

default value: utf8_general_ci

###  SSH Settings

__ssh_port__

default value: 22

__use_host_id__

Add RSA or DSA identity from host to guest on 'vagrant up'.
Does not support identites that require a passphrase. Options include:
- false         : don't add anything
- true          : add default files  (~/.ssh/id_rsa, ~/.ssh/id_dsa & ~/.ssh/identity)
- "[filename]"  : add a specific file e.g. /Users/username/.ssh/[filename]

default value: false

###  Varnish Settings

__varnish_memory__

default value: 512

### Other Settings

__drupal_solr_package__

Select which Solr module to install accepted values are 'search_api_solr' or 'apachesolr'

default value: "search_api_solr"

__hosts_file_location__

Local hosts file location.
Default location on *nix hosts is '/etc/hosts'.
Default location for GasMask on OSX is '/Users/< username >/Library/Gas Mask/Local/< file >.hst'.

default value: "/etc/hosts"

__hosts_file_update__

Select whether Vlad should edit the hosts file.

default value: true

__redis_port__

Redis Port

default value: 6379

__ansible_verbosity__

Set the level of verbosity that Ansible will use.
This can be one of "", "v", "vv", "vvv", or "vvvv".

default value: ""

__db_import_up__

Import MySQL database from file on 'vagrant up'. Options include:
- false          - don't import anything
- true          - import from vlad_aux/db_io/vlad_up.sql.gz
- "[filename]" - import from vlad_aux/db_io/[filename] (supports .sql, .bz2 and .gz files)

default value: false

__add_index_file__

Add the default index.php file (useful to turn off if you are going git clone into the web root folder)

default value: true

__synced_folder_type__

Use 'nfs' or 'rsync' for VM file editing in synced folder

default value: 'nfs'

__vlad_os__

The OS that vlad will use. This can be one of the following:

- "centos65"
- "ubuntu12"
- "ubuntu14"

default value: "ubuntu12"

### Git config user credentials

Leave these variales empty to skip this step.

__git_user_name__

default value: ""

__git_user_email__

default value: ""
