<?php
/* ------------------------------------------------------------------------ *
 * Program              :       purge_job.php
 * Author               :       Gerard Wassink
 * Date                 :       January 2019
 *
 * Function             :       Delete file from directory
 *                              Work to be done, deletion depends on
 *                                authorization
 *
 * ------------------------------------------------------------------------ *
 *                                              GNU LICENSE CONDITIONS
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
 *                              Copyright (C) 2019 Gerard Wassink
 * ------------------------------------------------------------------------ */


  $sysnam = exec("uname -n");
  print "<h1>" . $sysnam . "</h1>";

  if (!empty($_GET['fn'])) $fn = $_GET['fn'];
  if (!empty($_GET['jn'])) $jn = $_GET['jn'];

  if ( is_writable($fn) ) {
    print "Purging job " . $jn . " - file name: " . $fn . "<br />";
  } else {
    print "Told you: I'm not authorized to purge job " . $jn . "<br />";
    print "Still working on some authorization issues on the server.<br/>";
  }
?>
