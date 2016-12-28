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

# Now move two directories above, which puts us into the Vagrant directory.
cd ../../

# Setup a variable for possible alteration when we extrac the flags.
VLAD_EXTRA_VARS="vlad_running_local=true"

# Extract flags.
while getopts "t:u:" opt; do
  case $opt in
    t)
      # Grab any tags that have been sent to the script.
      ANSIBLE_TAGS=$OPTARG
      ;;
    u)
      # Grab the user assigned via the -u flag.
      VLAD_USER=$OPTARG
      VLAD_EXTRA_VARS="$VLAD_EXTRA_VARS user=$VLAD_USER"
      ;;
  esac
done

echo $VLAD_EXTRA_VARS

if [ -z "$ANSIBLE_TAGS" ]; then
    echo "Running Vlad playbook"
    ansible-playbook -i "localhost," --connection=local --extra-vars VLAD_EXTRA_VARS ./vlad_guts/playbooks/site.yml
fi

if [ ! -z "$ANSIBLE_TAGS" ]; then
    echo "Running Vlad playbook with the tags '$ANSIBLE_TAGS'"
    ansible-playbook -i "localhost," --connection=local --extra-vars VLAD_EXTRA_VARS ./vlad_guts/playbooks/site.yml -t "$ANSIBLE_TAGS"
fi
