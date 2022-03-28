<?php 
require_once '/home2/arout77/public_html/rhapsody/gateway.php';

$db = $app['database'];
$log = $app['log'];

/**************************************************************
 * We need to run this script every five minutes. Remove users
 * from `online` table where last ping is greater than 15 mins
 * This will run every 5 minutes as a cronjob
 *************************************************************/
$expiration = (time() - 120); // 300 secs = 5 minutes
$query = "DELETE FROM `online` WHERE last_ping < ?";
$sql = $db->prepare($query);
$sql->execute([$expiration]);
if(!$sql)
{
    $log->save("There was a problem removing idle users from `online` table");
}
