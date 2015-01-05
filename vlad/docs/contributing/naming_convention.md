To keep things consistent we need to have a standard way of naming tasks within the system. Each task should have a name attribute that should describe what it is that the task is doing in simple terms. 

If possible, this name should not exceed 80 characters. 

The task name should follow the following rules:

1. If the task filename shares the same name as the role it's in use:

    - name: task description

This will produce the following output (e.g. Adminer role):

    TASK: [adminer | copy adminer stylesheet] ***************************

2. If the task filename differs from the role it's in use:

    - name: task filename (lowercase) | task description

This will produce the following output (e.g. PEAR task within PHP role):

    TASK: [php | pear | force upgrade of pear] ************************************
