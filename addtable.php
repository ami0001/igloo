<?php
$con=mysqli_connect("localhost","root","","dbIgloo");
$null=0;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables
$accounts="CREATE TABLE tbAccount(
			username VARCHAR(32),
			password VARCHAR(32),
			fname VARCHAR(32),
			lname VARCHAR(32),
			email VARCHAR(64),
			phone CHAR(10),
			cardNum CHAR(16),
			securityCode CHAR(3),
			expireMonth CHAR(2),
			expireYear CHAR(2),
			cardName VARCHAR(21),
			PRIMARY KEY (username),
			CONSTRAINT UC_Account UNIQUE (email, cardNum)
			)";
$orders="CREATE TABLE tbOrder(
			orderNum BIGINT,
			orderName VARCHAR(32),
			orderStyle VARCHAR(8),
			orderTime TIMESTAMP,
			username VARCHAR(32),
			items VARCHAR(max),
			basePrice VARCHAR(max),
			taxPrice VARCHAR(max),
			overallPrice VARCHAR(max),
			PRIMARY KEY (orderNum),
			FOREIGN KEY (username) REFERENCES tbAccount (username)
			)";
$receipts="CREATE TABLE tbReceipt(
			receiptNum BIGINT
			receiptName VARCHAR(32),
			orderTime TIMESTAMP,
			username VARCHAR(32),
			items VARCHAR(max),
			basePrice FLOAT,
			taxPrice FLOAT,
			overallPrice FLOAT,
			tip VARCHAR(max),
			waiterName VARCHAR(32),
			waiter CHAR()
			cardNum CHAR(16),
			CONSTRAINT PK_Receipt PRIMARY KEY (receiptNum, orderTime),
			FOREIGN KEY (orderNum) REFERENCES tbOrder (orderNum),
			FOREIGN KEY (username) REFERENCES tbAccount (username),
			FOREIGN KEY (cardNum) REFERENCES tbAccount (carNum),
			FOREIGN KEY (waiter) REFERENCES tbEmployee (empId)
			)";
$items="CREATE TABLE tbItem(
			itemId CHAR(7),
			itemName VARCHAR(256),
			itemPrice FLOAT,
			itemDesc VARCHAR(max),
			PRIMARY KEY (itemID)
			)";
$employees="CREATE TABLE tbEmployee(
			empId CHAR(9);
			fname VARCHAR(32),
			minit VARCHAR(1),
			lname VARCHAR(32),
			ssn CHAR(9),
			bdate CHAR(9),
			address VARCHAR(128),
			sex CHAR(1),
			salary FLOAT,
			empLvl VARCHAR(8),
			username VARCHAR(32),
			PRIMARY KEY (empId),
			UNIQUE (ssn),
			FOREIGN KEY (username) REFERENCES tbAccount(username)
			)";
			
// Execute query
if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
  
if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
  
if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
  
if (mysqli_query($con,$accounts)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
  