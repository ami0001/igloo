<?php
$con=mysqli_connect("localhost","root","");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create database
$sql="CREATE DATABASE alex_final";
if (mysqli_query($con,$sql)) {
  echo "Database alex_final created successfully."."<br>";
} 
else {
  echo "Error creating database: " . mysqli_error($con) . ".<br>";
}
?>