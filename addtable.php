<?php
$con=mysqli_connect("localhost","root","","dbIgloo");
$null=0;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables
$accounts="CREATE TABLE tbAccount(Username CHAR(20),Password CHAR(20),Email CHAR(20))";

// Execute query
if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 