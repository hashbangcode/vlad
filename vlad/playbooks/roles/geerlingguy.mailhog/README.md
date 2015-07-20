# Ansible Role: MailHog

[![Build Status](https://travis-ci.org/geerlingguy/ansible-role-mailhog.svg?branch=master)](https://travis-ci.org/geerlingguy/ansible-role-mailhog)

Installs [MailHog](https://github.com/ian-kent/Go-MailHog), a Go-based SMTP server and web UI/API for displaying captured emails, on RedHat or Debian-based linux systems. Also installs sSMTP so you can easily redirect local email to the SMTP server.

Also installs sSMTP so you can redirect system mail to MailHog's built-in SMTP server.

If you're using PHP and would like to route all PHP email into MailHog, you will need to update the `sendmail_path` configuration option in php.ini, like so:

    sendmail_path = "/usr/sbin/ssmtp -t"

## Requirements

None.

## Role Variables

Available variables are listed below, along with default values (see `defaults/main.yml`):

    mailhog_binary_url: https://github.com/ian-kent/Go-MailHog/releases/download/0.07/Go-MailHog_linux_amd64

The MailHog binary that will be installed. You can find the latest version or a 32-bit version by visiting the Go-MailHog GitHub project releases page.

    mailhog_install_dir: /opt/mailhog

The directory into which the MailHog binary will be installed.

    ssmtp_mailhub: localhost:1025
    ssmtp_root: postmaster
    ssmtp_authuser: ""
    ssmtp_authpass: ""
    ssmtp_from_line_override: "YES"

sSMTP options. These should work with MailHog's default configuration.

## Dependencies

  - geerlingguy.daemonize

## Example Playbook

    - hosts: servers
      roles:
        - { role: geerlingguy.mailhog }

## TODO

  - Add more runtime config (through init script/env vars) for MailHog (e.g. port, host, etc.).

## License

MIT / BSD

## Author Information

This role was created in 2014 by [Jeff Geerling](http://jeffgeerling.com/), author of [Ansible for DevOps](http://ansiblefordevops.com/).
