# GAWSPOOL
## Description
This is php code to show pdf output files from Hercules that are created in a given directory and to be able to view or purge them.

## How?
In your website's directory:
- create two subdirectories named 'classa' and 'purged'
- make sure these directories are writable by your Hercules user
- store the gawsp*.php files in your website root

In your hercules config file: 
- have device 1403 spool to the prtspool utility that creates pdf files and point it to the classa directory

Point your web-browser to one of the .php files:
* gawspool.php 
* gawspcla.php

Last but not least: alter your mechanism that creates the pdf files to make them filemode 777 for these programs to be able to manipulate them back and forth.

## The files ##
- gawspool.php - displays the main screen with some explanation (in sofar it's needed).
- gawspcla.php - displays the files that were printed out of Hercules
- gawspurg.php - on a click from gawslcla, purges the indicated file (moves it to the 'purged' queue)
- gawsprgd.php - displays the files that are in the 'purged' queue
- gawsprst.php - on a click from gawsprgd, restores the indicated file (moves it back to the class A queue)
- gawsphdr.php - displays the header on every screen
- gawspftr.php - you guessed it, displays the footers

