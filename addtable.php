<?php
$con=mysqli_connect("localhost","root","","dbIgloo");
$null=0;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables
$accounts="CREATE TABLE tbAccount(
			email VARCHAR(64),
			pass VARCHAR(32),
			fname VARCHAR(32),
			lname VARCHAR(32),
			address VARCHAR(64),
			phone CHAR(10),
			cardNum CHAR(16),
			securityCode CHAR(3),
			expireDate CHAR(5),
			cardName VARCHAR(21),
			PRIMARY KEY (email),
			UNIQUE (cardNum)
			)";
$order="CREATE TABLE tbOrder(
			orderNum BIGINT,
			orderTime TIMESTAMP(6),
			fname VARCHAR(32),
			lname VARCHAR(32),
			orderStyle CHAR,
			email VARCHAR(64),
			phone CHAR(10),
			item VARCHAR(8),
			itemSize VARCHAR(4),
			flavors VARCHAR(8000),
			toppings VARCHAR(8000),
			orderPrice FLOAT,
			payStyle CHAR,
			cardNum CHAR(16),
			PRIMARY KEY (orderNum),
			)";
$menu="CREATE TABLE tbMenu(
			itemName VARCHAR(64),
			itemPrice FLOAT,
			itemDesc VARCHAR(8000),
			PRIMARY KEY (itemName)
			)";
/*
$employees="CREATE TABLE tbEmployee(
			efname VARCHAR(32),
			minit VARCHAR(1),
			elname VARCHAR(32),
			empId CHAR(9),
			ssn CHAR(9),
			bdate CHAR(10),
			address VARCHAR(128),
			sex CHAR(1),
			salary FLOAT,
			empLvl VARCHAR(8),
			email VARCHAR(32),
			PRIMARY KEY (empId),
			UNIQUE (ssn),
			FOREIGN KEY (email) REFERENCES tbAccount(email)
			)";
*/		
// Execute query
if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$orders)) {
  echo "tbOrder table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 
 
if (mysqli_query($con,$receipts)) {
  echo "tbReceipt table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
}  

if (mysqli_query($con,$items)) {
  echo "tbItem table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
}

if (mysqli_query($con,$employees)) {
  echo "tbEmployee table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
}
?>