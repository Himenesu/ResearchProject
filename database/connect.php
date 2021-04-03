<?php
session_start();
define('DBSERVER', '127.0.0.1');   //database server localhost
define('DBUSERNAME', 'root');     //database username root

$connect = mysqli_connect(DBSERVER, DBUSERNAME, "") or die ("Cannot connect to the server.");   //connection string

$mydatabase = mysqli_query($connect, "CREATE DATABASE IF NOT EXISTS `registration_data` ");
$mydatabase = mysqli_query($connect, "
                    CREATE TABLE IF NOT EXISTS `registration_data` . `users_personal_data` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `username` varchar(10) NOT NULL,
                        `pass` varchar(15) NOT NULL,
                        `cpass` varchar(15) NOT NULL,
                        `firstname` varchar(20) NOT NULL,
                        `midname` varchar(20) NOT NULL,
                        `lastname` varchar(20) NOT NULL,
                        `birthdate` varchar(20) NOT NULL,
                        `birthplace` varchar(40) NOT NULL,
                        `sex` varchar(10) NOT NULL,
                        `civil` varchar(20) NOT NULL,
                        `email` varchar(30) NOT NULL,
                        `contact` int(11) NOT NULL,
                        `citizen` varchar(20) NOT NULL,
                        `acquisition` varchar(20) NOT NULL,
                        `province` varchar(40) NOT NULL,
                        `city` varchar(40) NOT NULL,
                        `brgy` varchar(30) NOT NULL,
                        `address` varchar(40) NOT NULL,
                        `postal` int(10) NOT NULL,
                        `city_years_months_number` varchar(15) NOT NULL,
                        `country_years_number` int(5) NOT NULL,
                        
                        PRIMARY KEY(`id`)
                    ) ENGINE = InnoDB;");

if($connect === false){
    die("Cannot connect to the database." . mysqli_error());
}
else{
    mysqli_select_db($connect, "registration_data"); //connection open
    // echo "Conection Success"
}
?>