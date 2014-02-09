<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Holding Page</title>
</head>
<body>
  <header>
    <h1>Holding page</h1>
  </header>
  <section>
    <article>
      <p>If you are seeing this page then you have set up the Vagrant Drupal server correctly.</p>

      <p>Rather than giving you a copy of Drupal out of the box it is up to you to install Drupal yourself. To install
        Drupal 7 on the box log in (using 'vagrant ssh') and run the script /var/www/drupal7_install.sh. To clone the
        latest version of Drupal 8 and install you can run the script /var/www/drupal8_install.sh. The admin username
        for both Drupal installs is 'admin' and the password is 'password'. For best results you should run these
        scripts with sudo.</p>

      <h2>Some helpful links.</h2>
        <p>You can access some additional programs using the following URL's.</p>
        <h3><a href="http://www.drupal.local:1080/" title="MailCatcher">MailCatcher</a></h3>
        <p>MailCatcher is a program that intercepts all emails sent by PHP and shows them on this web page.</p>

        <h3><a href="http://adminer.drupal.local/" title="Adminer">Adminer</a></h3>
        <p>Adminer is a mini database management software, written in PHP.</p>

        <h3><a href="http://xhprof.drupal.local/" title="">XHProf</a></h3>
        <p>XHProf is a performance monitoring program that shows detailed execution stats of PHP page loads. In order to
            use XHProf you'll need to append the URL with "_profile=1" (i.e.
            <a href="http://www.drupal.local/?_profile=1" title="Run XHPRof profiler">http://www.drupal.local/?_profile=1</a>).</p>

        <h3>XDebug</h3>
        <p>XDebug is a PHP debugging and profiling tool. To use the debugger, point your IDE at this box IP address
            (192.168.100.100) and use port 9000.</p>
        <p>You can also trigger the XDebug profiler by appending "XDEBUG_PROFILE=true" to the URL (i.e.
            <a href="http://www.drupal.local/?XDEBUG_PROFILE=true" title="Run XDebug profiler">http://www.drupal.local/?XDEBUG_PROFILE=true</a>).</p>
    </article>
  </section>
</body>
</html>
