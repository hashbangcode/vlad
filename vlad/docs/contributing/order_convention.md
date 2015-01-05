In order to make the Ansible tasks in Vlad easy to read they should follow the following order of attributes:

1. name - should also follow the name convention
2. module - followed by attributes (e.g. command: ls -la)
3. with_items - used to supply a list of options to the task
4. sudo - used if the task needs sudo access
5. when - used to run a check before running the task
6. tags - roles may have their own tags so these should only be added to tasks in certain circumstances
7. any other option pertinent to the operation of the task (like changed_when, failed_when etc)
8. notify - needed if the task changes something that needs to restart a service

The notify option should always appear at the end of the task block.

Examples:

```
#!yaml

- name: add varnish vcl
  template: src=varnish_defaultvcl.j2 dest=/etc/varnish/default.vcl
  sudo: true
  notify:
   - restart varnish
```

```
#!yaml
- name: install MailCatcher prerequisite packages
  apt: pkg={{ item }} state=installed
  with_items:
    - rubygems
    - libsqlite3-dev
    - ruby-dev
  sudo: true

```
