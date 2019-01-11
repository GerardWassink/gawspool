<?php

/*
 * --- Generate system screen header
 */
$wdt = 480;
$sysnam = exec("uname -n");
print "<img src='./gfx/IBM_logo.svg_k.png' width='80' align='left' />";
print "<h1>" . $sysnam . "/370</h1>";

print "<hr width=" . $wdt . " align='left'>";
print "<table border=0 width=" . $wdt . ">";
print " <tr>";
print "  <th>";
print "   <a href='./gawspcla.php'>Class A Queue</a>";
print "  </th>";
print "  <th>";
print "   <a href='./gawsprgd.php'>Purged Queue Items</a>";
print "  </th>";
print "  <th>";
print "   <a href='./gawspool.php'>Info screen</a>";
print "  </th>";
print " </tr>";
print "</table>";
print "<hr width=" . $wdt . " align='left'>";

?>
