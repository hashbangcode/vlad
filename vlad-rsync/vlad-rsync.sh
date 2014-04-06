#!/bin/bash

# ~/Sites/vlad/vlad-rsync/vlad-rsync.sh ~/Sites/rsync-test

cd "${BASH_SOURCE%/*}"

rsync -avz --delete --include-from 'include-list.txt' --exclude-from 'exclude-list.txt' ../ $1