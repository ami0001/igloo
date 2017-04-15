<?php
//Information to connect to your MySQL Server AND DB
$host     = "localhost";
$username = "root";
$password = "";
$db       = "dbIgloo";

//Connect to MySQL Server
$con = mysqli_connect($host,$username,$password,$db) or die("Cannot connect to server.");
?> 