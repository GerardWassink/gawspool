# GAWSPOOL
## Description
This is php code to show pdf output files from Hercules that are created in a given directory and to be able to view or purge them.

## How?
In your website's directory:
- create a subdirectory named 'classa'
- make sure this directori is writable by your Hercules user
- store the gawsp*.php files in your website root

In your hercules config file: 
- have device 1403 spool to the prtspool utility that creates pdf files in the classa directory
- (see [http://nerd.gerardwassink.nl/s370/printing-to-pdf/ this link on how to do that])

Point your web-browser to one of the following .php files:
* gawspool.php
* gawspcla.php

Last but not least: alter your mechanism that creates the pdf files to make them filemode 777 for these programs to be able to manipulate them back and forth.

## The files ##
- gawspool.php - displays the main screen with some explanation (in sofar it's needed).
- gawspcla.php - displays the files that were printed out of Hercules
- gawspurg.php - on a click from gawslcla, purges the indicated file (renames it to '*.purged')
- gawsprgd.php - displays the files that are 'purged'
- gawsprst.php - on a click from gawsprgd, restores the indicated file (removes the '.purged' extension)
- gawsphdr.php - displays the header on every screen
- gawspftr.php - you guessed it, displays the footers
