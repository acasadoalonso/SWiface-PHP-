<?php
$trackid    = $_GET['trackid'];
$begin      = $_GET['begin'];
$time=intval($begin);
$since=date('ymdHis', $time);
$cwd =getcwd();
//echo $since;
$rc=0;
if ($begin == "")
	$begin = "0";
ob_start();
passthru('/usr/bin/python3 '.$cwd.'/trackpoints.py '.$trackid.' '.$begin, $rc);
$output = ob_get_clean(); 
echo $output;
?>
