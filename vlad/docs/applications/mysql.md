# Setting Up Local MySQL Applications

Below is a list of basic guides to setting up MySQL applications on your host box to communicate with databases located in your guest VMs.

## Sequel Pro (OS X)

Choose connection type "SSH" and complete the connection details as follows:

**Name:** Whatever you'd like to label this connection.

**MySQL Host:** "127.0.0.1" *(equivalent of "localhost" on the guest box)*

**Username:** "root"

**Password:** value of ```mysql_root_password``` in settings.yml

**Database:** value of ```dbname``` in settings.yml *(optional)*

**Port:** value of ```mysql_port``` in settings.yml

**SSH Host:** value of ```boxipaddress``` in settings.yml

**SSH User:** "vagrant"

**SSH Key:** "~/.vagrant.d/insecure_private_key" *(browse to this file by clicking the key icon)*

## MySQL Workbench (OS X)
As above - the values go in the following dialog:

![Vlad MySQL Workbench Settings](img/mysql-workbench-settings.png)
