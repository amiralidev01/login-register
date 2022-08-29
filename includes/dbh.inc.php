<?php

$serverName = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "phploginproject";

$conn = mysqli_connect($serverName, $DBUsername, $DBPassword, $DBName);

if(!$conn){
    echo "connection failed : " . mysqli_connect_error();
    die;
}