#!/bin/bash
#
# Windows shell provisioner for Ansible playbooks
#
# Originally based on Jeff Geerling's and KidS' works:
# https://github.com/geerlingguy/JJG-Ansible-Windows
# https://github.com/KSid/windows-vagrant-ansible
#

# Uncomment if behind a proxy server.
# export {http,https,ftp}_proxy='http://username:password@proxy-host:80'

ANSIBLE_PLAYBOOK=$1
ANSIBLE_HOSTS=$2
VLAD_OS=$3

export DEBIAN_FRONTEND=noninteractive

if [ ! -f /vagrant/$ANSIBLE_PLAYBOOK ]; then
  echo "Cannot find Ansible playbook at $ANSIBLE_PLAYBOOK."
  exit 1
fi

# Install Ansible and its dependencies if it's not installed already.
if [ -f /usr/bin/ansible ] || [ -f /usr/local/bin/ansible ]; then
	echo "Ansible is installed ($(ansible --version))"
else
	echo "Installing Ansible dependencies (OS $VLAD_OS)"
	if [ "$VLAD_OS" = "centos67" ]; then
		# CentOS 6.6
		echo "Installing EPEL..."
		yum -y install epel-release
		echo "Installing Ansible..."
		yum -y install ansible
		echo "Installing PIP..."
		yum -y install python-pip
		# Make sure setuptools are installed crrectly.
		pip install setuptools --upgrade
		echo "Installing markupsafe..."
		pip install markupsafe
	else
		# Ubuntu 12 or Ubuntu 14
		apt-get update
		apt-get install -y python python-dev python-setuptools python-pip
		# Make sure setuptools are installed crrectly.
		pip install setuptools --upgrade
		echo "Installing required python modules..."
		pip install paramiko pyyaml jinja2 markupsafe
		echo "Installing Ansible..."
		pip install ansible
	fi
fi

echo "Running Ansible provisioner defined in Vagrantfile."
ansible-playbook -v /vagrant/${ANSIBLE_PLAYBOOK} -i ${ANSIBLE_HOSTS} --extra-vars "is_windows=true" --connection=local
