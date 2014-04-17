# Vlad to project rsync script


## IMPORTANT - PLEASE READ

Vlad is still under heavy development and as such, the effects of running this script may change between versions. Only run this script to update your projects if you are aware of recent changes in Vlad. If you're unsure, backup your destination project before running this script.

## Description

Use this script (````vlad-rsync.sh````) to copy Vlad's files from this instance of Vlad to a new or existing project directory.
Unnecessary files will not be copied (.git and so on). See the exclude & include lists beside this script for further details.

### Files may be deleted
Any old Vlad files found at the destination path that are no longer required will be deleted.

## Usage

Ensure this script is executable and then run it passing the destination path as an argument.

For example:

```
$ path_to_vlad/vlad/scripts/rsync_vlad_to_project/vlad-rsync.sh path/to/your/project

```
