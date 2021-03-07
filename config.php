<?php

$dbuser = 'root';
$dbpass = " ";
$dbname = "registration data";

$db = new PDO('mysql:host=localhost;dbname=' . $dbname . ';charset=utf8', $dbuser, $dbpass);
$dv->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
