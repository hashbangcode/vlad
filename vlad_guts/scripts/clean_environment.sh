#!/bin/bash

# A little script to clean out some generated files to clean up the system.

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

# Delete all diagnostic and ancillary files.
rm -f ansible.all
rm -f vlad_guts/ansible.log
rm -f vlad_guts/host.ini
rm -f vlad_guts/merged_user_settings.yml
rm -rf vlad_guts/playbooks/ext_roles/
