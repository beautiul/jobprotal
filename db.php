<?php
/* Database connection settings */
$host = 'database-1.cfclhczdhrtn.us-east-1.rds.amazonaws.com';  //default host on your local computer
$user = 'admin';       //default Username of MySql
$pass = 'admin123'; //edit this value with your db password
$db = 'accounts';     //edit this value with your db name

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);