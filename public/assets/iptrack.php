<?php
//define our "maximum idle period" to be 30 minutes
$mins = 30;
//set the time limit before a session expires
ini_set ("session.gc_maxlifetime", $mins * 60);
session_start();
$ip_address = $_SERVER["REMOTE_ADDR"];
$page_name = $_SERVER["SCRIPT_NAME"];
$query_string = $_SERVER["QUERY_STRING"];
$current_page = $page_name."?".$query_string;
?>

