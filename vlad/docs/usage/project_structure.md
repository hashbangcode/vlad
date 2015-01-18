# Project structure

Vlad is flexible enough to fit into various different structures & workflows. How to integrate Vlad into your project will be up to you. This section of the documentation aims to help you decide based on criteria such as your project's basic file structure, how much control you have over that file structure and what tools you are familiar with and comfortable using.

## Running Vagrant

Don't forget that however you decide to structure your project, in order to run Vagrant commands you will first need to `cd` to the directory that contains the Vagrantfile (the root of Vlad's codebase).


## Relevant features & settings

Vlad has many features & settings, the following are particularly relevant to how you can adapt it to fit your structure & workflow:


### Vlad settings file location

Vlad is happy for you to store your settings in one of 2 possible locations:

1. "Inner" settings file: vlad/settings.yml
2. "Outer" settings file: ../settings/vlad-settings.yml

If Vlad finds both files it will prefer the outer settings file.


### host_synced_folder

`host_synced_folder` is a setting in Vlad that determines the directory that will be used to serve the files from (relative to the "vlad" directory). In other words, it's where you put your Drupal codebase.

If the directory doesn't exist when provisioning, Vlad will attempt to create it on the fly. The default value is "./docroot" which would produce a folder structure something like this:

	demo-project/
	├── vlad_aux/
	├── vlad/
	├── docroot/
	├── Vagrantfile
	└── and so on...
	

### Git

Vlad's codebase is [hosted on GitHub](https://github.com/hashbangcode/vlad) within a Git repository (repo). Depending on how your project is structured, this could make for a very convenient & reliable way to update Vlad using a simple `git pull` command or similar.


----


## Overview of example setups

The following example setups take different approaches and have their own pros & cons. This list is sorted with the most ideal setups nearer the top and the least ideal towards the bottom.

Don't forget that these are just examples. Further setups are possible and may even be a better fit for you needs.


### [Double repos parallel](usage/project_structure/#example-setup-double-repos-parallel)

This is a good fit for remote sub contractors that need to adapt to another team's workflow and yet keep Vlad in Git at the same time.

- Allows for deployment to remotes directly using Git.
- Allows for Vlad to be easily updated using Git.
- Allows for easy upstream contribution back to Vlad.
- Currently preferred by your humble author.


### [Double repos nested](usage/project_structure/#example-setup-double-repos-nested)

The most powerful and most complex example here. This setup is probably the best fit for well organised teams that aren't afraid of more advanced concepts such as Git submodules and alternative (maybe better) deployment methods.

- Everything in one "main"  project repo with Vlad as a Git submodule.
- Allows for Vlad to be easily updated using Git.
- Allows for easy upstream contribution back to Vlad.
- Deployment to be handled by something other than `git push`.
- Sub contractors will likely need initial orientation.


### [Single repo in docroot](usage/project_structure/#example-setup-single-repo-in-docroot)

A minimal setup that sacrifices some flexibility for simplicity. This is the goto setup if for whatever reason you cannot use "Double repos parallel" or "Double repos nested".

- Allows for deployment to remotes directly using Git.
- Vlad not in version control and would need to be updated manually.


### [Single repo in project root](usage/project_structure/#example-setup-single-repo-in-project-root)

Comparatively, this is the most compromised setup on this list. This setup should only really be considered if for whatever reason you cannot go with any of the other setups described.

- Allows for deployment to remotes directly using Git.
- Vlad not in its _original_ version control and would need to be updated manually.
- Project repo would need to be told to ignore Vlad.


----


## Example setup: Double repos parallel

	demo-project/
	├── vlad/
	│   ├── vlad_aux/
	│   ├── vlad/
	│   ├── ansible.cfg
	│   ├── Vagrantfile
	│   ├── README.md
	│   ├── .gitignore
	│   └── .git/
	├── settings/
	│   └── vlad-settings.yml
	└── docroot/
	    ├── .git/
	    └── [drupal codebase...]


### Notes

- This setup allows for both Vlad and your Drupal codebase to exist as separate Git repos all within one wrapping project directory ("demo-project" in this example).
- Uses Vlad's outer settings file.
- `host_synced_folder` set to "../docroot".

Because both Vlad and the Drupal codebase exist in separate repos Git can be used to handle the following fairly simply:

- Manage day to day development of the Drupal project codebase
- Deploy changes in the Drupal codebase to a remote repo
- Update Vlad directly from GitHub
- Contribute back upstream to Vlad via a cloned repo added as a remote


### Pros
- Benefits greatly from Git without adding unnecessary complexity.
- Does not require a complex deployment process.
- Vlad is practically a "black box" with the exception of anything written to vlad/vlad_aux.


### Cons
- Vlad settings are not stored in a Git repo.
- 2 separate repos could be viewed as an unwanted complexity if you want your whole project _including Vlad_ to neatly exist in one ultra portable repo.


----


## Example setup: Double repos nested

	demo-project/
	├── .git/
	├── .gitmodules
	├── vlad/
	│   ├── vlad_aux/
	│   ├── vlad/
	│   ├── ansible.cfg
	│   ├── Vagrantfile
	│   ├── README.md
	│   ├── .gitignore
	│   └── .git/
	├── settings/
	│   └── vlad-settings.yml
	└── docroot/
	    └── [drupal codebase...]


### Points to note

- This setup uses Git submodules (note the presence of demo-project/.gitmodules).
- The Drupal codebase's repo is located directly within the project's wrapping directory ("demo-project") and acts as the 'main' project repo (Vlad's repo is cloned into a Git submodule).
- This setup has made use of Vlad's outer settings file.
- `host_synced_folder` set to "../docroot".

This setup benefits greatly from Git once again with the addition that effectively everything is within the one "main" repo and even more stuff can be put into version control (e.g. Vlad's settings file and anything else you might wish to add directly within the main project directory). Vlad is treated more like a 3rd party library here via Git submodules which allow for repos to be nested in a way where the main repo isn't really aware of what's going on inside the nested repo (like a black box).

Deployment via Git could be made more complex using this setup as files & directories that are unwanted in Production (e.g. Vlad) would be pushed to a remote on `git push`. This would usually be solved by an alternative deployment process that would make sure to only include the relevant files.


### Pros
- Neat, tidy, ultra portable setup via "main" project repo.
- Vlad settings and potentially more in version control.
- Benefits greatly from Git (excluding deployment).
- Vlad is practically a "black box" with the exception of anything written to vlad/vlad_aux.


### Cons
- Simple deployment via Git not possible due to local dev files (Vlad) being in main repo.
- Git Submodules could be viewed as an unwanted complexity.


----


## Example setup: Single repo in docroot

	demo-project/
	├── vlad_aux/
	├── vlad/
	│   ├── settings.yml
	│   └── [other vlad files...]
	├── docroot/
	│   ├── [drupal codebase...]
	│   └── .git/
	├── ansible.cfg
	├── Vagrantfile
	└── README.md


### Points to note

- Uses a single Git repo (located within "docroot").
- Uses Vlad's inner settings file.
- `host_synced_folder` set to "./docroot".

This setup is far simpler than the preceding examples and involves simply nesting your Drupal codebase alongside Vlad's existing file structure. Vlad's Git related files are not required and can be removed (.git, .gitignore).


### Pros

- Simples.
- Allows for simple deployments via Git.


### Cons

- Vlad is detached from it's GitHub repo and so future updates would have to be downloaded & applied manually.
- Only the Drupal codebase is in version control making things a bit less portable.


----


## Example setup: Single repo in project root

	demo-project/
	├── .git/
	├── vlad_aux/
	├── vlad/
	│   ├── settings.yml
	│   └── [other vlad files...]
	├── docroot/
	│   └── [drupal codebase...]
	├── ansible.cfg
	├── Vagrantfile
	└── README.md


### Points to note

- Uses a single Git repo (located within "demo-project").
- Uses Vlad's inner settings file.
- `host_synced_folder` set to "./docroot".

This is another relatively simple setup that just involves nesting your Drupal codebase alongside Vlad's existing file structure. Vlad's Git related files will need to be removed (.git, .gitignore). The .git subdirectory at demo-project/.git pertains to the Drupal codebase.


### Pros

- Simples.
- Everything is in version control in a single repo (ultra portable).


### Cons

- Vlad would need to be excluded from Production creating a need for an alternative to `git push` for deployment.
- Your .gitignore file would need to be amended to ignore certain files created when using Vlad (see Vlad's .gitignore file for pointers).
- Vlad is detached from its GitHub repo and so future updates would have to be downloaded & applied manually.
