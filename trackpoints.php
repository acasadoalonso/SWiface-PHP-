<?php
$trackid    = $_GET['trackid'];
$begin      = $_GET['begin'];
$time=intval($begin);
$since=date('ymdHis', $time);
echo $since;
$rc=0;
ob_start();
passthru('/usr/bin/python2.7 /var/www/trackpoints.py '.$trackid.' '.$since, $rc);
$output = ob_get_clean(); 
echo $output;
?>
