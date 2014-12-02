Vlad supports sharing of your virtual machine using the 'vagrant share' command. To use this feature you first need to create an account at https://vagrantcloud.com/. Once done you can login to this service by typing the following command within the vlad directory.

    vagrant login

This will prompt you for the username and password that you created when you set up the account on https://vagrantcloud.com/.

You can then share the box using the following command:

    vagrant share

This will generate a URL (as a vagrantshare.com subdomain) that you can then give to anyone else.

This will only share HTTP addressed (under port 80) as a default, so if you also want to share the HTTPS address you need to specify it using the --https flag and giving it the port number of 443.

    vagrant share --https 443