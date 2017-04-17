<?php
//Information to connect to your MySQL Server AND DB
$host     = "104.155.172.250";
$username = "ami0001";
$password = "TheIgl00!";
$db       = "dbIgloo";

//Connect to MySQL Server
$con = mysqli_connect($host,$username,$password,$db) or die("Cannot connect to server.");
?> 