<?php
ob_start();
session_start();
//set timezone
date_default_timezone_set('America/New_York');
//database credentials
define('DBHOST','localhost');
define('DBUSER','sirmx');
define('DBPASS','B00ster#1');
define('DBNAME','webdata');
//application address
define('DIR','https://www.hawkitsolutions.com/');
define('SITEEMAIL','admin@hawkitsolutions.com');
try {
	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
//include the user class, pass in the database connection
include('assets/user.php');
include('assets/mail.php');
$user = new User($db);
?>