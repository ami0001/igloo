<?php
//Information to connect to your MySQL Server AND DB
$host     = "localhost";
$username = "root";
$password = "";
$db       = "alex_final";

//Connect to MySQL Server
$con = mysqli_connect($host,$username,$password,$db) or die("Can not connect to Server.");
?> 