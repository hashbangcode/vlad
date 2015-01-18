# VAGRANT SHARE!!!

Vlad supports sharing of your virtual machine using the `vagrant share` command. To use this feature you first need to create a free HashiCorp [Atlas](https://atlas.hashicorp.com/) account. Once done you can login to this service by typing the following command within the vlad directory.

    vagrant login

This will prompt you for the username and password that you created when you set up the [Atlas](https://atlas.hashicorp.com/) account.

You can then share the box using the following command:

    vagrant share

This will generate a temporary URL that you can then share with anyone else.

This will only share HTTP addresses (under port 80) as a default, so if you also want to share the HTTPS address you need to specify it using the --https flag and giving it the port number of 443.

    vagrant share --https 443
