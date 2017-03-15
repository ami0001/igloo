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
			phone CHAR(10),
			cardNum CHAR(16),
			securityCode CHAR(3),
			expireDate CHAR(5),
			cardName VARCHAR(21),
			PRIMARY KEY (email),
			UNIQUE (cardNum)
			)";
$order="CREATE TABLE tbReceipt(
			orderNum BIGINT,
			orderTime TIMESTAMP(6),
			orderName VARCHAR(32),
			empId char(9),
			email VARCHAR(64),
			items VARCHAR(8000),
			basePrice FLOAT,
			taxPrice FLOAT,
			overallPrice FLOAT,
			tip VARCHAR(8000),
			cardNum CHAR(16),
			PRIMARY KEY (orderNum),
			FOREIGN KEY (email) REFERENCES tbAccount (email),
			FOREIGN KEY (cardNum) REFERENCES tbAccount (cardNum),
			)";
$items="CREATE TABLE tbItem(
			itemId CHAR(7),
			itemName VARCHAR(256),
			itemPrice FLOAT,
			itemDesc VARCHAR(8000),
			PRIMARY KEY (itemId)
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