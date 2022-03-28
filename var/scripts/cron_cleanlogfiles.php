<?php 
ini_set('display_errors', 1);
/**************************************************************
 * This cronjob will run once a day, removing all .log files
 * under /var/logs folder larger than x-size
 *************************************************************/
# File size conversion to bytes
# 1MB   = 1048576 bytes
# 100kb = 102400 bytes
# 10kb  = 10240 bytes
# 1kb   = 1024 bytes
// $size_limit = 102400; // 1 MB
$files = glob('/home2/arout77/public_html/rhapsody/var/logs/*.log');

foreach($files as $file) {
  if(is_file($file)) {
    // $size = filesize($file) . ' <br>';
    // if($size >= $size_limit)
    // {
        unlink($file);
    // }
  }
}
