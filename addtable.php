<?php
$con=mysqli_connect("104.155.172.250","ami0001","TheIgl00!","dbIgloo");
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
			UNIQUE (cardNum),
			UNIQUE (phone)
			)";
			
$order="CREATE TABLE tbOrder(
			orderNum BIGINT AUTO_INCREMENT CHECK(orderNum >= 1),
			orderTime TIMESTAMP(6),
			fname VARCHAR(32),
			lname VARCHAR(32),
			orderStyle VARCHAR(8) CHECK(orderStyle = 'Delivery' or orderStyle = 'Carryout'),
			orderType VARCHAR(16) CHECK(orderType = 'Specialty' or orderType = 'Custom'),
			email VARCHAR(64),
			address VARCHAR(64),
			phone CHAR(10),
			itemName VARCHAR(32),
			itemSize VARCHAR(16) CHECK(itemSize = 'Snowflake' or itemSize = 'Icicle' or itemSize = 'Iceberg' or itemSize = 'Glacier'),
			flavors VARCHAR(8000),
			toppings VARCHAR(8000),
			orderPrice FLOAT CHECK(orderPrice > 0.0),
			payStyle VARCHAR(8) CHECK(payStyle = 'Cash' or payStyle = 'Credit'),
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

// Insert operations
$item1 = "INSERT INTO tbMenu VALUES ('Honeydew-Almond', 'This smoothie is dedicated to the almond lovers in the world. Enjoy a nice honeydew smoothie with sprinkles of almond scattered within! YUM!', 10)";
$item2 = "INSERT INTO tbMenu VALUES ('Banana PB&J', 'They doubted us. They said it couldn't be done. We proved them wrong. Enjoy this limited offering of a PB&J smoothie', 7)";
$item3 = "INSERT INTO tbMenu VALUES ('Birthday Cake', 'Having a birthday cake for a party is so simple. Now you can be the life of the party by ordering the birthday cake smoothie. We will even throw in one pack of candle on the side for free', 15)";
$item4 = "INSERT INTO tbMenu VALUES ('Strawberry Shortcake', 'Do you like Strawberry Shortcake? Every wondered what one would taste like in a smoothie? Well say no more...press the select button and enjoy a strawberry flavored smoothie', 10)";
$item5 = "INSERT INTO tbMenu VALUES ('Tangerine Honey', 'Enjoy a tangerine smoothie with a hint of honey glazed on top!', 9)";
$item6 = "INSERT INTO tbMenu VALUES ('Watermelon', 'Enjoy a watermelon flavored smoothie for the summer. This item is only available for the summer so get it before it is to late!', 11)";
$item7 = "INSERT INTO tbMenu VALUES ('Pineapple-Mango', 'Who doesn't love Mango? Who doesn't love pineapple? Adding them together only make sense right? Well we did it', 10)";
$item8 = "INSERT INTO tbMenu VALUES ('Oatmeal Cookie', 'Nothing taste better than Grandma's oatmeal cookies. Well now you can send her a smoothie to thank her!', 11)";

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

if (mysqli_query($con,$item5)) {
  echo "Item 4 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item6)) {
  echo "Item 4 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item7)) {
  echo "Item 4 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
} 

if (mysqli_query($con,$item8)) {
  echo "Item 4 was successfully inserted into tbMenu."."<br>";
}
else {
  echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
} 

?>