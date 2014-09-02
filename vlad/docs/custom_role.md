# Custom Role

Vlad can run tasks specified within an additional "custom" role defined by you. This can be used to add additional provisioning steps that are unique to a project and/or too opinionated to be contributed back upstream to the Vlad project.

A working knowledge of [Ansible playbooks](http://docs.ansible.com/playbooks.html) is required to take advantage of this feature of Vlad.

----

## Creating a custom role

### Name & location

Vlad expects the custom role to be located at

```
../vlad-custom
```

### File structure

Like the other roles that ship with Vlad it should follow the file structure that Ansible expects: 
[http://docs.ansible.com/playbooks_roles.html#roles](http://docs.ansible.com/playbooks_roles.html#roles)

Your custom role *must* include a default variables file at vars/main.yml (even if it just contains ```---```). Vlad expects expects this file to exist and will use it as a fallback if it cannot locate ```../settings/vlad-custom-settings.yml```.

### Available variables

All variables defined in Vlad's settings file will be available for use in the custom role.

## Running a custom role

### Provisioning with Vagrant

Once you've created a custom role, running it as part of Vagrant's provisioning step is simply a case of setting the following value in Vlad's settings:

```
custom_provision: "y"
```

The custom role will be run as part of ```vlad/playbooks/site_custom.yml```, _after_ the main Ansible playbook ```vlad/playbooks/site.yml```.

### Running without Vagrant

You can run the tasks in your custom role without Vagrant in the same way that you can with Vlad's main Ansible playbook. Just make sure you call the correct playbook:

```
ansible-playbook -i vlad/host.ini vlad/playbooks/site_custom.yml
```

Similarly, you can focus this to run any specific tags that you've defined within your custom role:

```
ansible-playbook -i vlad/host.ini vlad/playbooks/site_custom.yml -t tag_1,tag_2
```
