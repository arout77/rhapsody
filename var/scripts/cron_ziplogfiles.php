<?php 
/**************************************************************
 * This cronjob will run once a day, at midnight, zipping all 
 * .log files under /var/logs folder
 *************************************************************/
$files = glob('/home2/arout77/public_html/rhapsody/var/logs/*');
$zip = new ZipArchive;
$name = date("m-d-Y") . '_logs.zip';
if ($zip->open('/home2/arout77/public_html/rhapsody/var/logs/'.$name, ZipArchive::CREATE) === TRUE)
{
  foreach($files as $file) {
    // Add files to the zip file
    $zip->addFile($file);
  }
  // All files are added, so close the zip file.
  $zip->close();
}