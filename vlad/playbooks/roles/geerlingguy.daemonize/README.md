# Ansible Role: Daemonize

[![Build Status](https://travis-ci.org/geerlingguy/ansible-role-daemonize.svg?branch=master)](https://travis-ci.org/geerlingguy/ansible-role-daemonize)

Installs [Daemonize](http://software.clapper.org/daemonize/), a tool for running commands as a Unix daemon.

## Requirements

None.

## Role Variables

Available variables are listed below, along with default values (see `defaults/main.yml`):

    workspace: /root

The location where code will be downloaded and compiled.

    daemonize_version: 1.7.5

The daemonize release version to install.

    daemonize_install_path: "/usr"

The path where the compiled daemonize binary will be installed.

## Dependencies

None

## Example Playbook

    - hosts: servers
      roles:
        - { role: geerlingguy.daemonize }

## License

MIT / BSD

## Author Information

This role was created in 2014 by [Jeff Geerling](http://jeffgeerling.com/), author of [Ansible for DevOps](http://ansiblefordevops.com/).
