# Custom Roles

Vlad can run tasks specified within an additional "custom" role defined by you. This can be used to add additional provisioning steps that are unique to a project and/or too opinionated to be contributed back upstream to the Vlad project.

A working knowledge of [Ansible playbooks](http://docs.ansible.com/playbooks.html) is required to take advantage of this feature of Vlad.

----

## Creating a custom role

### Name & location

Vlad expects the custom role to be located at the following path, relative to the root of Vlad's own codebase (e.g. relative to the Vagrantfile):

    ../vlad-custom

### File structure

Like the other roles that ship with Vlad it should follow the file structure that Ansible expects: 
[http://docs.ansible.com/playbooks_roles.html#roles](http://docs.ansible.com/playbooks_roles.html#roles)

### Variables

Your custom role must include a default variables file at `vars/main.yml` (even if it just contains `---`). Vlad expects expects this file to exist and will use it as a fallback if it cannot locate `../settings/vlad-custom-settings.yml`.

All variables defined by Vlad and possibly overridden via your settings file will be available to the custom role.

### Tasks

Your custom role must also contain a default tasks file at `tasks/main.yml`. Much like the roles included within Vlad, this file is the first place within your role that Ansible will look for tasks or includes to further files that may list tasks.

### Example structure

Below is an example file structure for a custom role, including where it sits in relation to Vlad's own codebase. This example includes subdirectories for templates & handlers but these are entirely optional.

```
demo-project/
├── vlad-custom/
│   ├── vars/
│   │   └── main.yml
│   ├── templates/
│   │   └── vampire.alias.drushrc.php.j2
│   ├── tasks/
│   │   ├── main.yml
│   │   ├── bite_necks.yml
│   │   └── suck_blood.yml
│   └── handlers/
│   │   ├── main.yml
│   │   └── check_sunrise.yml
├── vlad/
│   ├── vlad_aux/
│   ├── vlad/
│   ├── Vagrantfile
│   └── [and so on...]
├── settings/
│   ├── vlad-settings.yml
│   └── vlad-custom-settings.yml
└── docroot/
```

## Running a custom role

### With Vagrant

Once you've created a custom role, running it as part of Vagrant's provisioning step is simply a case of setting the following value in Vlad's settings:

    custom_provision: true

The custom role will be run as part of `vlad/playbooks/site_custom.yml`, _after_ the main Ansible playbook `vlad/playbooks/site.yml`.

###  Without Vagrant

You can run the tasks in your custom role without Vagrant in the same way that you can with Vlad's main Ansible playbook. Just make sure you call the correct playbook:

    ansible-playbook -i vlad/host.ini vlad/playbooks/site_custom.yml

Similarly, you can narrow the focus of this command to run only specific tags that you've defined within your custom role:

    ansible-playbook -i vlad/host.ini vlad/playbooks/site_custom.yml -t tag_1,tag_2
