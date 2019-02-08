<?php
/* ------------------------------------------------------------------------ *
 * Program		:	gawsprgd.php
 * Author		:	Gerard Wassink
 * Date			:	January 2019
 *
 * Function		:	Show files in the 'purged' directory
 *
 * ------------------------------------------------------------------------ *
 * 						GNU LICENSE CONDITIONS
 * ------------------------------------------------------------------------ *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * ------------------------------------------------------------------------ *
 *				Copyright (C) 2019 Gerard Wassink
 * ------------------------------------------------------------------------ */

$path = "./classa";							/* --- output directory  	--- */
$patt = "*.purged";							/* search for purged files	--- */
$srchfor = $path."/".$patt;
$files = array_diff(glob($srchfor), array('.', '..'));	/* get file names - */

include 'gawsphdr.php';						/* --- Display screen header -- */

print "<h1>Purged output</h1>";				/* --- get system name		--- */

print "<table border='0'>";					/* --- Start of table		--- */
print "<tr bgcolor='#1a5ab3'><th>&nbsp;#&nbsp;&nbsp;</th><th>jobnum</th><th>jobname</th><th>restore</th></tr>";

$num = 1;									/* --- sequence number		--- */
foreach($files as $filename) {				/* --- cycle thru file names -- */
  $filename = basename($filename);			/* --- Make full qualified name */

  $parts = explode("-", $filename);			/* --- split filename and get - */
  $jobnum = $parts[0];						/* ---    the jobnumber		--- */
  $jobnam = explode(".", $parts[1])[0];		/* ---    and the jobname	--- */

											/* --- check writability	--- */
  if ( is_writable($path."/".$filename) && is_file($path."/".$filename) ) {
    $rst_txt = "<a href='./gawsprst.php?fn=" . $filename . "&jn=" . $jobnum . "'>restore</a>";
  } else {
    $rst_txt = "<a href='./gawsprst.php?fn=" . $filename . "&jn=" . $jobnum . "'>noauth</a>";
  }

											/* --- write table lines	--- */
  if ( $num % 2 ) {							/* --- odd or even ?		--- */
    $bg = "#dddddd";						/* --- color for odd numbers -- */
  } else {
    $bg = "#ffffff";						/* --- color for even number -- */
  }

											/* --- print every line		--- */
  print "<tr bgcolor='" . $bg . "'>";		/* --- row header			--- */
  print "<td align='center'>" . $num . "</td>";		/* --- Sequence number	*/
  print "<td align='center'>" . $jobnum . "</td>";	/* --- Job number	--- */
  print "<td align='left'  >" . $jobnam . "</td>";	/* --- Job name		--- */
  print "<td align='center'>" . $rst_txt . "</td>";	/* --- Can we restore?	*/
  print "</tr>";							/* --- End of row 			--- */

  $num++;									/* --- next line			--- */
}

print "</table>";							/* --- End of table			--- */

print "<h3>Usage:</h3>";
print "<ul>";
print "<li>Click on 'restore' to restore the job to the class A queue</li>";
print "</ul>";

include './gawspftr.php';

?>

