<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
 	<title>Igloo</title>
 	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<!-- body style="background-image:url('images/CustomOrderBackground6.jpg'); background-size: 100% 100%; background-repeat: no-repeat;" -->
<!-- body style="background-color:#FFF8DC" -->
<body style="background-color:#FFEFD5">
	<?php
		require "check.php";
	?>
	<div id="specialties">
	<p>
	<div id = "wrap2">
		<div class = "left">
			<!-- Size descriptions  -->
			<p id = "customFont" align = "center">
				Size Descriptions
			</p>
			<textarea cols="50" rows="8" readonly style = "resize:none;border:5px solid #0033CC;">Here are the Igloo we offer four different cup sizes. The size of the cup is going to determine the base price of the smoothie.
			
Snowflake: $2.00

Icicle: $4.00

Iceberg: $6.00

Glacier: $8.00
				 
			</textarea>
			
			<!-- Flavor descriptions  -->
			<div id="itemDescriptionSpace"></div>
			<p id = "customFont" align = "center">
				Flavor Descriptions
			</p>
			<textarea cols="50" rows="19" readonly style = "resize:none;border:5px solid #0033CC;">Here at the Igloo we offer a variety of different flavors.
			
There are currently 12 flavors to choose from. The flavors selected are not going to effect the price of the smoothie.

You can select one flavor or multiple flavors. The possibilites are endless.  

Every flavor is made from 100% natural ingredients. All of our fruit are picked and delivered to us by the farmers in our local community. A portion of ourssales goes back to the community in order to support small businesses.

Each flavor is a mixture of the natural fruit element as well as our secret formula in order to create the ultimate smoothie experience! 	
			</textarea>
			
			<!-- Topping description -->
			<div id="itemDescriptionSpace"></div>
			<p id = "customFont" align = "center">
				Topping Descriptions
			</p>
			<textarea cols="50" rows="18" readonly style = "resize:none;border:5px solid #0033CC;">Here at the Igloo we offer a variety of toppings to select from.

Each topping is 50 cents. 

You are able to add as many toppings as you would like to your smoothie!

Please note that some toppings may have traces of nuts and nut oils or may have been made alongside other products containing nuts. 
 
The Igloo can not be held responsible for any issues resulting from food allergies

We recommend adult supervision for anyone that is under the age of 13 using our online services.
			</textarea>
			
			<!-- Order Options -->
			<div id="itemDescriptionSpace"></div>
			<p id = "customFont" align = "center">
				Order Option
			</p>
			<textarea cols="50" rows="4" readonly style = "resize:none;border:5px solid #0033CC;"> Here at the Igloo we support two different forms of ordering.

Carryout: The order will be available for pickup at the nearest store

Delivery: The order will be delivered to your front door steps
			</textarea>

		</div>
		<div class = "right">
			<!-- Space for formatting -->
			<p id = "customFont" align = "center">
				Pictures
			</p>
			<!-- Picture for cup sizes -->
			
			<!-- img src="images/CustomPictures/cupSizes.jpg" alt="Login" style="width:360px;height:220px;" border="3" -->
			<img src="images/CustomPictures/cupSizes.jpg" alt="Login" style="width:380px;height:240px;border:5px solid #0033CC;">
			
			<!-- Picture for flavors -->
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/smoothiePic2.jpg" alt="Login" style="width:380px;height:240px;border:5px solid #0033CC;">
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/smoothiePic4.jpg" alt="Login" style="width:380px;height:240px;border:5px solid #0033CC;">
			
			<!-- Picture for toppings -->
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/toppingPic1.jpg" alt="Login" style="width:380px;height:240px;border:5px solid #0033CC;">
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/toppingPic3.jpg" alt="Login" style="width:380px;height:240px;border:5px solid #0033CC;">
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/smoothiePic1.jpg" alt="Login" style="width:380px;height:240px;border:5px solid #0033CC;">
			
			
		</div>
	</div>
	<!-- Working on creating a section for the left side -->
	<!-- div id="rightSideCustomSection" -->
      		<!-- ul -->
				<!-- p -->
					<!-- Select the Size Testing something right here. -->
					<!-- I wonder what all I can do rigth here -->
				<!-- /p -->
			<!-- /ul -->
	<!-- /div -->
	<!-- Working on creating a section for the left side -->
	
	<!-- Working on creating a section for the middle side -->
	<!-- div id="#mainContentCustomPage" -->
		<!-- p -->
			<!-- Testing main Content -->
		<!-- /p -->
	<!-- /div -->
	<form name="custom" method="post" action="custom.php">
	<div id="tableSpace2"></div>
	<p id = "customFont" align = "center">
		Select the Size
	</p>
	<table align="center" style = "width:30%">
		<tr>
			<th colspan="2">Size Select</th>
		<tr>
			<td>Snowflake</td>
			<td><input type="radio" name="size" value="Snowflake"></td>
		</tr>
		<tr>
			<td>Icicle</td>
			<td><input type="radio" name="size" value="Icicle"></td>
		</tr>
		<tr>
			<td>Iceberg</td>
			<td><input type="radio" name="size" value="Iceberg"></td>
		</tr>
		<tr>
			<td>Glacier</td>
			<td><input type="radio" name="size" value="Glacier"></td>
		</tr>
	</table>
	
	<!-- div id="tableSpace1"></div -->
	<div id="flavorSpace"></div>
	
	<p id = "customFont" align = "center">
		Select the Flavor
	</p>
	<table align="center" style = "width:30%;">
		<tr>
			<th>Flavors</th>
			<th>Select</th>
		<tr>
			<td>Strawberry</td>
			<td><input type="checkbox" name="flavors[]" value="strawberry"></td>
		</tr>
		<tr>
			<td>Blueberry</td>
			<td><input type="checkbox" name="flavors[]" value="blueberry"></td>
		</tr>
		<tr>
			<td>Blackberry</td>
			<td><input type="checkbox" name="flavors[]" value="blackberry"></td>
		</tr>
		<tr>
			<td>Pineapple</td>
			<td><input type="checkbox" name="flavors[]" value="pineapple"></td>
		</tr>
		<tr>
			<td>Mango</td>
			<td><input type="checkbox" name="flavors[]" value="mango"></td>
		</tr>
		<tr>
			<td>Cocunut</td>
			<td><input type="checkbox" name="flavors[]" value="coconut"></td>
		</tr>
		<tr>
			<td>Banana</td>
			<td><input type="checkbox" name="flavors[]" value="banana"></td>
		</tr>
		<tr>
			<td>Kiwi</td>
			<td><input type="checkbox" name="flavors[]" value="kiwi"></td>
		</tr>
		<tr>
			<td>Peach</td>
			<td><input type="checkbox" name="flavors[]" value="peach"></td>
		</tr>
		<tr>
			<td>Orange</td>
			<td><input type="checkbox" name="flavors[]" value="orange"></td>
		</tr>
		<tr>
			<td>Grape</td>
			<td><input type="checkbox" name="flavors[]" value="grape"></td>
		</tr><tr>
			<td>Raspberry</td>
			<td><input type="checkbox" name="flavors[]" value="raspberry"></td>
		</tr>
	</table>
	
	<div id="tableSpace1"></div>
	
	<p id = "customFont" >
		Select the Topping
	</p>
	<table align="center" style = "width:30%">
		<tr>
			<th>Toppings</th>
			<th>Select</th>
		<tr>
			<td>Strawberries</td>
			<td><input type="checkbox" name="toppings[]" value="strawberries"></td>
		</tr>
		<tr>
			<td>Blueberries</td>
			<td><input type="checkbox" name="toppings[]" value="blueberries"></td>
		</tr>
		<tr>
			<td>Sliced Bananas</td>
			<td><input type="checkbox" name="toppings[]" value="sliced bananas"></td>
		</tr>
		<tr>
			<td>Shredded Coconut</td>
			<td><input type="checkbox" name="toppings[]" value="shredded coconut"></td>
		</tr>
		<tr>
			<td>Hemp Seeds</td>
			<td><input type="checkbox" name="toppings[]" value="hemp seeds"></td>
		</tr>
		<tr>
			<td>Nuts</td>
			<td><input type="checkbox" name="toppings[]" value="nuts"></td>
		</tr>
		<tr>
			<td>Oatmeal</td>
			<td><input type="checkbox" name="toppings[]" value="oatmeal"></td>
		</tr>
		<tr>
			<td>Granola</td>
			<td><input type="checkbox" name="toppings[]" value="granola"></td>
		</tr>
		<tr>
			<td>Dried Mangos</td>
			<td><input type="checkbox" name="toppings[]" value="dried mangos"></td>
		</tr>
		<tr>
			<td>Raisins</td>
			<td><input type="checkbox" name="toppings[]" value="raisins"></td>
		</tr>
		<tr>
			<td>Raspberries</td>
			<td><input type="checkbox" name="toppings[]" value="raspberries"></td>
		</tr>
	</table>
	
	<!-- div id="tableSpace1"></div -->
	<div id="orderSpace"></div>
	
	<p id = "customFont" >
		Order Style
	</p>
	<table align="center" style = "width:30%">
		<tr>
			<th colspan="2">Select Style</th>
		<tr>
			<td>Carryout</td>
			<td><input type="radio" name="style" value="Carryout"></td>
		</tr>
		<tr>
			<td>Delivery</td>
			<td><input type="radio" name="style" value="Delivery"></td>
		</tr>
	</table>
	
	<div id="tableSpace1"></div>
	
	<p id = "customFont" >
		Payment Style
	</p>
	<table align="center" style = "width:30%">
		<tr>
			<th>Select Payment</th>
			<th>Select</th>
		<tr>
			<td>Cash</td>
			<td><input type="radio" name="pay" value="Cash"></td>
		</tr>
		<tr>
			<td>Credit</td>
			<td><input type="radio" name="pay" value="Credit"></td>
		</tr>
		</tr>
	</table>
	
	<p>
		<!-- input type="submit" name="place" value="Place Order" -->
		<!-- input type="submit" name="place" value="Place Order" -->
		<input type="image" name="place" src="images/buttons/PlaceOrder.png" alt="Place Order" />
		<input type="hidden" name="place" value="Place Order"
	</p>
	</form>
	<div id="tableSpace1"></div>
	
	
	<?php
		require "config.php";
		
		if (isset($_POST['place'])) {
			
			if (empty($_POST['flavors']) || !isset($_POST['style']) || !isset($_POST['size']) || !isset($_POST['pay'])) {
				echo "Order size, order style, payment style, and at least one flavor must be selected.";
			}
			else {
				$flavors = $_POST['flavors'];
				$toppings = $_POST['toppings'];
				$size = $_POST['size'];
				$style = $_POST['style'];
				$pay = $_POST['pay'];
				$flavorsStr = "";
				$toppingsStr = "";
				$price = 0.0;
				
				if ($size == "Snowflake")
					$price = $price + 2;
				elseif ($size == "Icicle")
					$price = $price + 4;
				elseif ($size == "Iceberg")
					$price = $price + 6;
				elseif ($size == "Glacier")
					$price = $price + 8;
				
				foreach ($flavors as $flavor) {
					$flavorsStr = $flavorsStr.$flavor.', ';
				}
				
				foreach ($toppings as $topping) {
					$toppingsStr = $toppingsStr.$topping.', ';
					$price = $price + 0.5;
				}
				
				$price = $price + ($price * 0.09);
				
				$flavorsStr = substr($flavorsStr, 0, -2);
				$toppingsStr = substr($toppingsStr, 0, -2);
				
				$item = "INSERT INTO tbOrder (flavors, toppings, itemSize, orderStyle, orderType, payStyle, orderPrice) VALUES ('$flavorsStr', '$toppingsStr', '$size', '$style','Custom','$pay','$price')";

				if (mysqli_query($con,$item)) {
					$query = mysqli_query($con, "SELECT * FROM tbOrder WHERE orderNum = LAST_INSERT_ID()");
					while ($row = mysqli_fetch_assoc($query)) {
						foreach ($row as $col => $val) {
							if ($col == 'orderNum') {
								$_SESSION['orderNum'] = $val;
							}
							elseif ($col == 'orderTime') {
								$_SESSION['orderTime'] = $val;
							}
							elseif ($col == 'orderType') {
								$_SESSION['orderType'] = $val;
							}
							elseif ($col == 'payStyle') {
								$_SESSION['payStyle'] = $val;
							}
						}
					}
					
					header("location: order.php");
				}
				else {
					echo mysqli_error($con);
				} 
			}
		}
	?>
	
	<div id="footer">
			<p>Copyright &copy; 2017 The Igloo. All rights reserved.</p>
	</div> <!-- End of footer -->

</body>



</html>