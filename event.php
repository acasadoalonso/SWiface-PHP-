<?php
$eventid = $_GET['eventid'];
$cwd =getcwd();
$rc=0;
ob_start();
passthru('/usr/bin/python3 '.$cwd.'/event.py '.$eventid, $rc);
$output = ob_get_clean(); 
echo $output;
?>
