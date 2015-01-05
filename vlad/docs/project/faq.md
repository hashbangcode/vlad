# Frequently Asked Questions

## Can I use the Ansible playbooks in Vlad on my production server?

It is possible to run the Ansible playbooks in Vlad on a remote server to set it up in the same way, but it shouldn't be done. There are a few security free measures that Vlad uses in order to allow easy access to the box which would allow open access to the production box you set up. However, it is possible to use the playbooks in Vlad as a template for setting up servers, but care must be taken to ensure best practice security measures are followed.

## Can you include software X?

We are happy to include software as long as it is needed. There are quite a few components in Vlad already so anything new will need a good use case. Installing all of the elements provided with Vlad can take quite a while and there will come a point where there is just too much on the system to allow it to run properly.

Pull requests to include software you think might be useful are welcome, as long as they include a good use case and appropriate tests.

## There seems to be a problem with Ansible, can I submit an issue?

If you are sure that the problem is not related to Vlad then the Ansible issue tracker is probably a good place to start.

## There seems to be a problem with Vagrant, can I submit an issue?

If you are sure that the problem is not related to Vlad then the Vagrant issue tracker is probably a good place to start.

## I'm interested in helping out, where can I find more information?

Your support is welcome! Take a look at the [contributing](contributing/contributing) page for more guidance. :)
