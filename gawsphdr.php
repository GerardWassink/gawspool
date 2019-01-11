<?php
/*
 * --- Set overall style
 */

print "<style type='text/css'>";
print "* {";
print " font-family: 'courier';";
print "}";
print "</style>";

/*
 * --- Generate system screen header
 */
$wdt = 640;
$sysnam = exec("uname -n");
print "<img src='./gfx/IBM_logo.svg_k.png' width='80' align='left' />";
print "<h1>" . $sysnam . "/370</h1>";

print "<hr width=" . $wdt . " align='left'>";
print "<table border=0 width=" . $wdt . ">";
print " <tr>";
print "  <th>::</th>";
print "  <th>";
print "   <a href='./gawspcla.php'>Class A</a>";
print "  </th>";
print "  <th>::</th>";
print "  <th>";
print "   <a href='./gawsprgd.php'>Purged Items</a>";
print "  </th>";
print "  <th>::</th>";
print "  <th>";
print "   <a href='./gawspool.php'>Info screen</a>";
print "  </th>";
print "  <th>::</th>";
print " </tr>";
print "</table>";
print "<hr width=" . $wdt . " align='left'>";

?>
