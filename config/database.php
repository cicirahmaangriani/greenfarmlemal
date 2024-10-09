<?php 

$hostname = 'localhost';
$user = 'root';
$pw = '';
$database = 'lemal';

$db = mysqli_connect($hostname, $user, $pw, $database);

// Start Session

if(!session_id()) session_start();

?>