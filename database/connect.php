<?php
session_start();
define('DBSERVER', '127.0.0.1');   //database server localhost
define('DBUSERNAME', 'root');     //database username root

$connect = mysqli_connect(DBSERVER, DBUSERNAME, "") or die ("Cannot connect to the server.");   //connection string

$mydatabase = mysqli_query($connect, "CREATE DATABASE IF NOT EXISTS `registrationdata` ");
$mydatabase = mysqli_query($connect, "
                    CREATE TABLE IF NOT EXISTS `registrationdata` . `usersdata` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `username` varchar(10) NOT NULL,
                        `firstname` varchar(20) NOT NULL,
                        `midname` varchar(20) NOT NULL,
                        `lastname` varchar(20) NOT NULL,
                        `email` varchar(30) NOT NULL,
                        `contact` int(11) NOT NULL,
                        `address` varchar(25) NOT NULL,
                        `pass` varchar(15) NOT NULL,
                        `cpass` varchar(15) NOT NULL,
                        PRIMARY KEY(`id`)
                    ) ENGINE = InnoDB;");

if($connect === false){
    die("Cannot connect to the database." . mysqli_error());
}
else{
    mysqli_select_db($connect, "registrationdata"); //connection open
    // echo "Conection Success"
}
?>