## Scenario 1: Adding Vlad to an existing git repository

It is easy to make Vlad a part of your project code.

### Pros

As Vlad is part of the code of the project, which means that you can give the project to another developer and they can
get up and running with a full development environment easily and quickly.

### Cons

Vlad now forms part of the code base of your project, which can mean that there are a lot of files floating around that 
are not used in the live environment. There is nothing wrong with this approach, but it can be a little untidy. If this
is a real problem then part of the deploy process might be to strip out the Vlad files before setting the files live.

### Updating Vlad

Because Vlad is now a part of your project then you should update it whenever you can. This has been made as easy as 
possible by keeping most of the working files of Vlad within a couple of directories. To update Vlad just download
the latest copy of the code from Github and copy the following files and directories into your project, overriding
where needed.

<code>
/vlad
/vlad_aux
ansible.cfg
Vagrantfile
</code>

Once done you can commit the changes into your repo.