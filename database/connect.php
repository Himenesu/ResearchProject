<?php
session_start();
define('DBSERVER', '127.0.0.1');   //database server localhost
define('DBUSERNAME', 'root');     //database username root

$connect = mysqli_connect(DBSERVER, DBUSERNAME, "") or die ("Cannot connect to the server.");   //connection string

$data = mysqli_query($connect, "CREATE DATABASE IF NOT EXISTS `registrationdata` ");
$data = mysqli_query($connect, "
                    CREATE TABLE IF NOT EXISTS `registrationdata` . `datatable` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `firstname` varchar(20) NOT NULL,
                        `lastname` varchar(20) NOT NULL,
                        `email` varchar(30) NOT NULL,
                        `contact` varchar(15) NOT NULL,
                        `pass` varchar(15) NOT NULL,
                        `cpass` varchar(15) NOT NULL,
                        PRIMARY KEY(`id`)
                    ) ENGINE = InnoDB;");

if($connect === false){
    die("Cannot connect to the database." . mysqli_error());
}
?>