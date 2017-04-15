<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;  	charset=UTF-8" />
	<title>Custom Order Page</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<?php
			require "check.php";
	?>
	<div id="specialties">
	<p>
	<div id = "wrap">
		<div class = "left">
			<p align = "center">
				Select the Size
			</p>
		</div>
		<div class = "right">
		
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
	
	<div id="tableSpace1"></div
	<p align = "center">
		Select the Size
	</p>
	<table align="center" style = "width:30%">
		<tr>
			<th>Size</th>
			<th>Select</th>
		<tr>
			<td>Snowflake</td>
			<td><input type="radio" name="size" value="S"></td>
		</tr>
		<tr>
			<td>Icicle</td>
			<td><input type="radio" name="size" value="M"></td>
		</tr>
		<tr>
			<td>Iceberg</td>
			<td><input type="radio" name="size" value="L"></td>
		</tr>
		<tr>
			<td>Glacier</td>
			<td><input type="radio" name="size" value="XL"></td>
		</tr>
	</table>
	
	<div id="tableSpace1"></div>
	
	<p align = "center">
		Select the Flavor
	</p>
	<table align="center" style = "width:30%">
		<tr>
			<th>Flavors</th>
			<th>Select</th>
		<tr>
			<td>Strawberry</td>
			<td><input type="checkbox" name="flavors" value="S"></td>
		</tr>
		<tr>
			<td>Blueberry</td>
			<td><input type="checkbox" name="flavors" value="M"></td>
		</tr>
		<tr>
			<td>Blackberry</td>
			<td><input type="checkbox" name="flavors" value="L"></td>
		</tr>
		<tr>
			<td>Pineapple</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
	</table>
	
	<div id="tableSpace1"></div>
	
	<p>Select the Topping</p>
	<table align="center" style = "width:30%">
		<tr>
			<th>Toppings</th>
			<th>Select</th>
		<tr>
			<td>Strawberries</td>
			<td><input type="checkbox" name="flavors" value="S"></td>
		</tr>
		<tr>
			<td>Blueberries</td>
			<td><input type="checkbox" name="flavors" value="M"></td>
		</tr>
		<tr>
			<td>Bananas</td>
			<td><input type="checkbox" name="flavors" value="L"></td>
		</tr>
		<tr>
			<td>Shredded Cocunut</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
	</table>
	
	<div id="tableSpace1"></div>
	
	<p>Order Option</p>
	<table align="center" style = "width:30%">
		<tr>
			<th>Order Option</th>
			<th>Select</th>
		<tr>
			<td>Pickup</td>
			<td><input type="checkbox" name="flavors" value="S"></td>
		</tr>
		<tr>
			<td>Delivery</td>
			<td><input type="checkbox" name="flavors" value="M"></td>
		</tr>
	</table>
	
	<div id="tableSpace1"></div>
	
	<li> <a href=special.php><img src="images/button/specialityOrderButton.png" alt="Special Page" title="Special Page"></a></li>
	
	

</body>



</html>