<?php

include 'gawsphdr.php';

print "<br/>";
print "<hr width=" . $wdt . " align='left'>";
print "<pre>";
print "  _____     __          _______ _____   ____   ____  _      <br/>";
print " / ____|   /\ \        / / ____|  __ \ / __ \ / __ \| |     <br/>";
print "| |  __   /  \ \  /\  / / (___ | |__) | |  | | |  | | |     <br/>";
print "| | |_ | / /\ \ \/  \/ / \___ \|  ___/| |  | | |  | | |     <br/>";
print "| |__| |/ ____ \  /\  /  ____) | |    | |__| | |__| | |____ <br/>";
print " \_____/_/    \_\/  \/  |_____/|_|     \____/ \____/|______|<br/>";
print "<br/>";
print "<pre>";
print "<hr width=" . $wdt . " align='left'>";
print "The GAW spooling system for Hercules pdf output is a web-based<br/>";
print "system for handling output from Hercules.<br/>";
print "<br/>";
print "At this moment it contains two queues, tha class A queue where<br/>";
print "Hercules deposits it's output, and the 'purged' queue where<br/>";
print "we find output that has been purged from tha class A queue.<br/>";
print "<br/>";
print "In the near future automated processes will be in place to<br/>";
print "'empty the trash', in other words: really delete purged output<br/>";
print "periodically, let's say once a day.<br/>";
print "<br/>";
print "Please make your choice in the menu above.<br/>";
print "<br/>";

include 'gawspftr.php';

?>
