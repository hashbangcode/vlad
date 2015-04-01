#!/bin/bash
#
# Windows shell provisioner for Ansible playbooks
#
# Based on Jeff Geerling's and KidS' works:
# https://github.com/geerlingguy/JJG-Ansible-Windows
# https://github.com/KSid/windows-vagrant-ansible
#

# Uncomment if behind a proxy server.
# export {http,https,ftp}_proxy='http://username:password@proxy-host:80'

ANSIBLE_PLAYBOOK=$1
ANSIBLE_HOSTS=$2
TAGS=$3

export DEBIAN_FRONTEND=noninteractive

if [ ! -f /vagrant/$ANSIBLE_PLAYBOOK ]; then
  echo "Cannot find Ansible playbook at $ANSIBLE_PLAYBOOK."
  exit 1
fi

# Install Ansible and its dependencies if it's not installed already.
# This is specific to Ubuntu Precise
if [ ! -f /usr/local/bin/ansible ]; then
	echo "Ensuring locales are properly configured."
	export LANGUAGE=en_US.UTF-8
	export LANG=en_US.UTF-8
	export LC_ALL=en_US.UTF-8
	locale-gen en_US.UTF-8
	dpkg-reconfigure locales
	echo "Installing Ansible dependencies."
	apt-get update
	apt-get install -y python python-dev python-setuptools python-pip
	# Make sure setuptools are installed crrectly.
	pip install setuptools --upgrade
	echo "Installing required python modules."
	pip install paramiko pyyaml jinja2 markupsafe
	echo "Installing Ansible."
	pip install ansible
else
	echo "Ansible is already installed."
fi

echo "Running Ansible provisioner defined in Vagrantfile."
ansible-playbook -v /vagrant/${ANSIBLE_PLAYBOOK} -i ${ANSIBLE_HOSTS} --tags="$3" --extra-vars "is_windows=true" --connection=local