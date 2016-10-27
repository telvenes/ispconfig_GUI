<?php
/*********************************************************************
*
*			Copyright: Torstein Thorsland Elvenes Elvenes
*			Email:     torstein@thorsland.net
*
**********************************************************************/
if (!defined('TTE')){
    die("Hacking?");
}

$config_engine_dir 	= "engine/";

$mysql_hostname = "localhost";
$mysql_username = "c0u1";
$mysql_password = "p3";
$mysql_database = "c0db1";


$username = 'api';
$password = 'pp2';
$soap_location = 'https://localhost:8080/remote/index.php';
$soap_uri = 'https://localhost:8080/remote/';


$mysqli = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>
