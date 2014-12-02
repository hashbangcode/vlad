# Road Map

Future development prospects.

## Version 1.0

A full release of the system is rapidly approaching. We are working to make Vlad more stable and more configurable.

- Add dependencies to roles so that when installing elements they require prerequisites to be installed also.
- Add a destroy step to allow for elements to be removed from the host machine when the machine is destroyed. At the moment this consists of an Ansible file that isn't triggered.

## Beyond Version 1.0

- Add the ability to export the database on the machine when it is destroyed so that nothing is lost completely.
- Test with (and possibly add support) different virtual machine systems.
- Add Nginx support.
- Add support for different versions of Solr.