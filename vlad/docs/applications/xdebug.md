# Xdebug

The following lines detail the options that Vlad sets as the Xdegub setups.

    xdebug.remote_enable=1
    xdebug.remote_port=9000
    xdebug.remote_handler="dbgp"
    xdebug.remote_connect_back = 1

    xdebug.profiler_enable=0
    xdebug.profiler_output_dir=/tmp/xdebug_profiles
    xdebug.profiler_enable_trigger=1
    xdebug.profiler_output_name=cachegrind.out.%p
    
This allows for both interactive debugging and profiling using Xdebug.

The Xdebug profiler needs to be activated by passing the XDEBUG_PROFILE variable as a GET or POST parameter. When passed during a page load this will generate a file starting with _cachegrind.out._ in the /tmp/xdebug_profiles directory. Open these files with a program like KCachegrind to see data on how your application is performing.