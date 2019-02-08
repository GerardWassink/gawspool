<?php
/* ------------------------------------------------------------------------ *
 * Program              :       gawspurg_job.php
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

  if (!empty($_GET['fn'])) $fn = $_GET['fn'];
  if (!empty($_GET['jn'])) $jn = $_GET['jn'];

  $fn = "./classa/" . basename($fn);

  if ( is_writable($fn) && is_file($fn )) {
    print "Purging job " . $jn . " - file name: " . $fn . "<br />";
    $cmd = "mv " . $fn . " " . $fn . ".purged";
    exec($cmd);
    if(isset($_SERVER['HTTP_REFERER'])) {
       $url = $_SERVER['HTTP_REFERER'];
       ob_start();
       header('Location: '.$url);
       ob_end_flush();
       die();
    }
  } else {
    print "Told you: I'm not authorized to purge job " . $jn . "<br />";
  }

?>
