# gaw_spool_que
## Description
This is php code to show pdf output files from MVS under Hercules that are created in a given directory and to be able to view or purge them.

## how?
In your website's directory:
- create a subdirectory named 'classa'
- store both .php files in your website root

In your hercules config file: 
- have device 1403 spool to the prtspool utility that creates pdf files and point it to this classa directory

Point your web-browser to the classa.php 
