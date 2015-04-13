#!/bin/bash

# Find the current directory of the script being run.
SOURCE="${BASH_SOURCE[0]}"
while [ -h "$SOURCE" ]; do # resolve $SOURCE until the file is no longer a symlink
  TARGET="$(readlink "$SOURCE")"
  if [[ $SOURCE == /* ]]; then
    SOURCE="$TARGET"
  else
    DIR="$( dirname "$SOURCE" )"
    SOURCE="$DIR/$TARGET"
  fi
done

RDIR="$( dirname "$SOURCE" )"
DIR="$( cd -P "$( dirname "$SOURCE" )" && pwd )"

# Change to the script directory.
cd $DIR

# Now move two directories abobe, which puts us into the Vagrant directory.
cd ../../

# Grab any tags that have been sent to the script.
ANSIBLE_TAGS=$1

if [ -z "$ANSIBLE_TAGS" ]; then
    echo "Running Vlad playbook"
    ansible-playbook --inventory-file=./.vagrant/provisioners/ansible/inventory/vagrant_ansible_inventory --private-key=~/.vagrant.d/insecure_private_key -u vagrant ./vlad/playbooks/site.yml
fi

if [ ! -z "$ANSIBLE_TAGS" ]; then
    echo "Running Vlad playbook with the tags '$ANSIBLE_TAGS'"
    ansible-playbook --inventory-file=./.vagrant/provisioners/ansible/inventory/vagrant_ansible_inventory --private-key=~/.vagrant.d/insecure_private_key -u vagrant ./vlad/playbooks/site.yml -t "$ANSIBLE_TAGS"
fi