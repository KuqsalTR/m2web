<?php
session_start();
$host = 'localhost';
$user = 'dbuser';
$pass = 'dbpass';
$dbname = 'metin2';

$db = new mysqli($host, $user, $pass, $dbname);
if ($db->connect_error) {
    die('Database connection error: ' . $db->connect_error);
}
?>
