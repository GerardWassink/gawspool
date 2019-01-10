<?php
/* ------------------------------------------------------------------------ *
 * Program		:	classa.php
 * Author		:	Gerard Wassink
 * Date			:	January 2019
 *
 * Function		:	Show files in an output directory
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

$path = "./classa";					/* --- directory for class A output 	--- */
$files = array_diff(scandir($path), array('.', '..'));	/* --- get file names 			--- */

include 'gawsphdr.php';

print "<h1>class A output queue</h1>";			/* --- Create headers			--- */

print "<table border='0'>";				/* --- Start of table			--- */
print "<tr bgcolor='#1a5ab3'><th>&nbsp;#&nbsp;&nbsp;</th><th>jobnum</th><th>jobname</th><th>purge</th></tr>";

$num = 1;						/* --- sequence number			--- */
foreach($files as $filename) {				/* --- cycle thru file names		--- */
  $fqn = $path . "/" . $filename;			/* --- Make full qualified name		--- */

  $parts = explode("-", $filename);			/* --- split filename and get		--- */
  $jobnum = $parts[0];					/* ---    the jobnumber			--- */
  $jobnam = explode(".", $parts[1])[0];			/* ---    and the jobname		--- */

  if ( is_writable($fqn) ) {				/* --- check writability		--- */
    $pur_txt = "<a href='./gawspurg.php?fn=" . $fqn . "&jn=" . $jobnum . "'>purge</a>";
  } else {
    $pur_txt = "<a href='./gawspurg.php?fn=" . $fqn . "&jn=" . $jobnum . "'>noauth</a>";
  }

 							/* --- write table lines		--- */
  if ( $num % 2 ) {					/* --- odd or even ?			--- */
    $bg = "#dddddd";					/* --- color for odd numbers            --- */
  } else {
    $bg = "#ffffff";					/* --- color for even number            --- */
  }

							/* --- print every line			--- */
  print "<tr bgcolor='" . $bg . "'>";			/* --- row header			--- */
  print "<td align='center'>" . $num . "</td>";		/* --- Sequence number			--- */
  print "<td align='center'>";				/* --- print				--- */
  print   "<a href='" . $fqn . "' target='_blank'>";	/* ---   job numer			--- */
  print   $jobnum . "</a></td>";			/* ---     and create link for viewing	--- */
  print "<td align='left'  >" . $jobnam . "</td>";	/* --- Job name				--- */
  print "<td align='center'>" . $pur_txt . "</td>";	/* --- Can we purge?			--- */
  print "</tr>";					/* --- End of row 			--- */

  $num++;						/* --- next line			--- */
}

print "</table>";					/* --- End of table			--- */

print "<h3>Usage:</h3>";
print "<ul>";
print "<li>Click on jobnumber to view the job in a seperate window (close window to return here)</li>";
print "<li>Click on 'purge' to purge the job (tread carefully, gone is gone)</li>";
print "</ul>";

include 'gawspftr.php';

?>

