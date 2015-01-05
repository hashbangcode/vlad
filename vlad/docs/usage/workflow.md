This page shows a number of different scenarios that Vlad can be used in.

<hr>

## Scenario 1: Adding Vlad to an existing git repository

This would perhaps be the most common way of using Vlad in new and existing projects. The only dependency is that it relies on having the web root directory as a directory within the project.

It is easy to make Vlad a part of your project code, you just need to have a directory within your repository. Your repository would look something like this.

```
/docroot
```

If you want to make this a different directory then use the `host_synced_folder` setting to change this from the default of `./docroot`.

All you need to do next is download Vlad and copy the Vlad files into your repository. Once you commit your code your repository would look something like this.

```
/docroot
/vlad
/vlad_aux
ansible.cfg
Vagrantfile
```

<strong>Pros</strong>

As Vlad is part of the code of the project, which means that you can give the project to another developer and they can get up and running with a full development environment easily and quickly.

<strong>Cons</strong>

Vlad now forms part of the code base of your project, which can mean that there are a lot of files floating around that are not used in the live environment. There is nothing wrong with this approach, but it can be a little untidy. If this is a real problem then part of the deploy process might be to strip out the Vlad files before setting the files live.

<strong>Updating Vlad</strong>

Because Vlad is now a part of your project then you should update it whenever you can. This has been made as easy as possible by keeping most of the working files of Vlad within a couple of directories. To update Vlad just download the latest copy of the code from Github and copy the following files and directories into your project, overriding
where needed.

```
/vlad
/vlad_aux
ansible.cfg
Vagrantfile
```

Once done you can commit the changes into your repo.

<hr>


## Scenario 2: Using Vlad independently of a repository

This is perhaps the easiest way to get up and running with development using Vlad.

If your project files don't have a separate web root directory (i.e. the files are 'flat') then this is the best approach for you.

To get Vlad working in this situation you should download Vlad and place it into a directory on your machine. After this you just need to run git clone in that directory to place your project into the docroot directory. You can specify the destination directory in the following way.

```git clone <git url> docroot```

The vlad directory would now look like this.

```
/docroot
/vlad
/vlad_aux
ansible.cfg
Vagrantfile
```

<strong>Pros</strong>

There is no reliance on Vlad to develop the site.

<strong>Cons</strong>

As Vlad doesn't form part of the code base of the project it might make getting people up to speed on projects slightly harder. They will either have to download Vlad themselves or use some other mechanism to develop the site.

<strong>Updating Vlad</strong>

As Vlad doesn't form part of your code base you don't have to commit any updates to Vlad. That said, it is still prudent to keep things up to date so when needed you will have to download Vlad from Github, extract the files and replace the following files with the newer versions.

```
/vlad
/vlad_aux
ansible.cfg
Vagrantfile
```