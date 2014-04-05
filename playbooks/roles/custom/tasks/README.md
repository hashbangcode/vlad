# Custom tasks

Add custom playbooks to this directory. These will be run *after* all optional software has been installed.

Be sure to include a main.yml playbook that includes any further playbooks.

Note that playbooks in this directory will only be run if "custom_provision" is yet to "y" in settings.yml.