<?php
$con=mysqli_connect("localhost","root","","dbIgloo");
$null=0;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables
$account="CREATE TABLE tbAccount(
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
			orderType CHAR,
			email VARCHAR(64),
			address VARCHAR(64),
			phone CHAR(10),
			itemName VARCHAR(8),
			itemSize VARCHAR(4),
			flavors VARCHAR(8000),
			toppings VARCHAR(8000),
			orderPrice FLOAT,
			payStyle CHAR,
			cardNum CHAR(16),
			securityCode CHAR(3),
			expireDate CHAR(5),
			cardName VARCHAR(21),
			PRIMARY KEY (orderNum)
			)";

$menu="CREATE TABLE tbMenu(
			itemName VARCHAR(64),
			itemDesc TEXT,
			itemPrice FLOAT,
			PRIMARY KEY (itemName)
			)";

// Execute query
if (mysqli_query($con,$account)) {
  echo "tbAccount table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$order)) {
  echo "tbOrder table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$menu)) {
  echo "tbMenu table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
}

// Insert operations
$item1 = "INSERT INTO tbMenu VALUES ('Spaghetti Sundae', 'A sundae flavored smoothie with spaghetti on top.', 10)";
$item2 = "INSERT INTO tbMenu VALUES ('Licorice Latte', 'A latte flavored smoothie with licorice on top.', 15.25)";
$item3 = "INSERT INTO tbMenu VALUES ('Cherry Chicken', 'A cherry flavored smoothie with chicken on top.', 20.50)";
$item4 = "INSERT INTO tbMenu VALUES ('Pineapple Pizza', 'A pineapple flavored smoothie with a slice of pizza on top.', 25)";

if (mysqli_query($con,$item1)) {
  echo "Item 1 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting table: " . mysqli_error($con) . ".<br>";
}

if (mysqli_query($con,$item2)) {
  echo "Item 2 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting table: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item3)) {
  echo "Item 3 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting table: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item4)) {
  echo "Item 4 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting table: " . mysqli_error($con) . ".<br>";
}  
?>