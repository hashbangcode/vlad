# Testing

Vlad runs some low level testing to give you peace of mind that everything is installed and that any changes made to the playbooks doesn't break the box.

## Pre Testing

Before running Vlad does a couple of checks to make sure that it has the settings it needs to run the rest of the install process. If any of the settings created don't work then provisioning of the box will fail.

## Post Testing

Once Ansible has set up the box a testing task is run. This checks to ensure that everything that was selected to be installed has been installed.

These tests were added partly to give confidence that the box has been setup correctly and to aid future development work generally.

It is possible to run the tests manually by using the 'test' tag like this:

    ansible-playbook -i vlad/host.ini -t test vlad/playbooks/site.yml
