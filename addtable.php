<?php
$con=mysqli_connect("localhost","root","","dbIgloo");
$null=0;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables
$account="CREATE TABLE tbAccount(
			email VARCHAR(64) NOT NULL,
			pass VARCHAR(32) NOT NULL,
			fname VARCHAR(32) NOT NULL,
			lname VARCHAR(32) NOT NULL,
			address VARCHAR(64) NOT NULL,
			phone CHAR(10) NOT NULL,
			cardNum CHAR(16),
			securityCode CHAR(3),
			expireDate CHAR(5),
			cardName VARCHAR(21),
			PRIMARY KEY (email),
			UNIQUE (cardNum),
			UNIQUE (phone)
			)";
			
$order="CREATE TABLE tbOrder(
			orderNum BIGINT NOT NULL AUTO_INCREMENT CHECK(orderNum >= 1),
			orderTime TIMESTAMP(6) NOT NULL,
			fname VARCHAR(32) NOT NULL,
			lname VARCHAR(32) NOT NULL,
			orderStyle VARCHAR(8) NOT NULL CHECK(orderStyle = 'Delivery' or orderStyle = 'Carryout'),
			orderType VARCHAR(16) NOT NULL CHECK(orderType = 'Specialty' or orderType = 'Custom'),
			email VARCHAR(64) NOT NULL,
			address VARCHAR(64) NOT NULL,
			phone CHAR(10) NOT NULL,
			itemName VARCHAR(32),
			itemSize VARCHAR(16) NOT NULL CHECK(itemSize = 'Snowflake' or itemSize = 'Icicle' or itemSize = 'Iceberg' or itemSize = 'Glacier'),
			flavors VARCHAR(8000),
			toppings VARCHAR(8000),
			orderPrice FLOAT NOT NULL CHECK(orderPrice > 0.0),
			payStyle VARCHAR(8) NOT NULL CHECK(payStyle = 'Cash' or payStyle = 'Credit'),
			cardNum CHAR(16),
			securityCode CHAR(3),
			expireDate CHAR(5),
			cardName VARCHAR(21),
			PRIMARY KEY (orderNum, orderTime)
			)";

$menu="CREATE TABLE tbMenu(
			itemName VARCHAR(64),
			itemDesc TEXT,
			itemPrice FLOAT CHECK(itemPrice > 0.0),
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

$poop = "poop";
$test = "test";
// Insert operations
$item1 = "INSERT INTO tbMenu (itemName, itemDesc) VALUES ('$poop', '$test')";
$item2 = "INSERT INTO tbMenu VALUES ('Licorice Latte', 'A latte flavored smoothie with licorice on top.', 15.25)";
$item3 = "INSERT INTO tbMenu VALUES ('Cherry Chicken', 'A cherry flavored smoothie with chicken on top.', 20.50)";
$item4 = "INSERT INTO tbMenu VALUES ('Pineapple Pizza', 'A pineapple flavored smoothie with a slice of pizza on top.', 25)";

if (mysqli_query($con,$item1)) {
  echo "Item 1 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
}

if (mysqli_query($con,$item2)) {
  echo "Item 2 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item3)) {
  echo "Item 3 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item4)) {
  echo "Item 4 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
}  
?>