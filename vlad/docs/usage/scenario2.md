### Scenario 2: Using Vlad independently of a repository

This is perhaps the easiest way to get up and running with development using Vlad.

### Pros

There is no reliance on Vlad to develop the site.

### Cons

As Vlad doesn't form part of the code base of the project it might make getting people up to speed on projects slightly
harder. They will either have to download Vlad themselves or use some other mechanism to develop the site.

### Updating Vlad

As Vlad doesn't form part of your code base you don't have to commit any updates to Vlad. That said, it is still prudent
to keep things up to date so when needed you will have to download Vlad from Github, extract the files and replace the
following files with the newer versions.

<code>
/vlad
/vlad_aux
ansible.cfg
Vagrantfile
</code>