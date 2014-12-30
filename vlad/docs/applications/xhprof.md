# Getting started with XHProf

XHProf is an extension for PHP that allows performance statistics to be recorded. Vlad includes the XHGUI application that allows the statistics found to be used and interpreted. You can access the XHGUI via URL [http://xhprof.drupal.local/](http://xhprof.drupal.local/).

When first loaded XHGUI will contain no data. You'll need to kick off XHProf on your site using "?_profile=1" at the end of the URL. If you have installed a Varnish/Apache setup (which is the default setup with Vlad) then you'll need to bypass Varnish using port 8080. The default URL to start XHProf is therefore:

    http://www.drupal.local:8080/?_profile=1

This will continue to record statistics until you tell it not to. This can be done by sending the _profile parameter to be 0. Like this:

    http://www.drupal.local:8080/?_profile=0
    
XHGUI is available at https://github.com/preinheimer/xhprof