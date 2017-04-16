<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;  	charset=UTF-8" />
	<title>Custom Order Page</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<!-- body style="background-image:url('images/CustomOrderBackground6.jpg'); background-size: 100% 100%; background-repeat: no-repeat;" -->
<body style="background-color:#6699CC">
	<?php
			require "check.php";
	?>
	<div id="specialties">
	<p>
	<div id = "wrap">
		<div class = "left">
			<!-- Size descriptions  -->
			<p align = "center">
				Size Descriptions
			</p>
			<textarea cols="50" rows="8" readonly style = "resize:none">Here are the Igloo we offer four different cup sizes. 
			
SnowFlake: This size is for those who would like a small sample.

Icicle: This size is for those who would prefer a small cup.

Iceberg: This size is for those who are up for the challenge.

Glacier: This size is only for champions.
				 
			</textarea>
			
			<!-- Flavor descriptions  -->
			<div id="itemDescriptionSpace"></div>
			<p align = "center">
				Flavor Descriptions
			</p>
			<textarea cols="50" rows="19" readonly style = "resize:none">Here at the Igloo we offer a variety of different flavors.
			
There are currently 12 flavors to choose from

Strawberry: Our strawberries are picked from the freshest gardens

Blueberry: Our blueberries are flown in from Paris

Pineapple: Our Pineapples are hand delivered 

Mango:

Cocunut:

Banana:

Kiwi:

Peach:

Orange:

Grape:

Raspberry:
				
			</textarea>
			
			<!-- Topping description -->
			<div id="itemDescriptionSpace"></div>
			<p align = "center">
				Topping Descriptions
			</p>
			<textarea cols="50" rows="18" readonly style = "resize:none">
				This is where the user can enter text. If there's too much text, the textbox can develop scrollbars to accommodate the extra text...
				dkfjdkfjdksajfdlkajkjfkdasjdkjfdkajfdkajkdjfdkafjdkfjdkaldj
			</textarea>
			
			<!-- Order Options -->
			<div id="itemDescriptionSpace"></div>
			<p align = "center">
				Order Option
			</p>
			<textarea cols="50" rows="4" readonly style = "resize:none">
				This is where the user can enter text. If there's too much text, the textbox can develop scrollbars to accommodate the extra text...
				dkfjdkfjdksajfdlkajkjfkdasjdkjfdkajfdkajkdjfdkafjdkfjdkaldj
			</textarea>

		</div>
		<div class = "right">
			<!-- Picture for cup sizes -->
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/cupSizes.jpg" alt="Login" style="width:360px;height:220px;">
			
			<!-- Picture for flavors -->
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/smoothiePic2.jpg" alt="Login" style="width:360px;height:220px;">
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/smoothiePic4.jpg" alt="Login" style="width:360px;height:220px;">
			
			<!-- Picture for toppings -->
			<div id="pictureDescriptionSpace2"></div>
			<img src="images/CustomPictures/toppingPic1.jpg" alt="Login" style="width:360px;height:220px;">
			<div id="pictureDescriptionSpace"></div>
			<img src="images/CustomPictures/toppingPic3.jpg" alt="Login" style="width:360px;height:220px;">
			
			
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
	
	<div id="tableSpace2"></div>
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
		<tr>
			<td>Mango</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Cocunut</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Banana</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Kiwi</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Peach</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Orange</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Grape</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr><tr>
			<td>Raspberry</td>
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
			<td>Slice Bananas</td>
			<td><input type="checkbox" name="flavors" value="L"></td>
		</tr>
		<tr>
			<td>Shredded Cocunut</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Hemp Seeds</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Nuts</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Oatmeal</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Granola</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Dried Mangos</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Raisins</td>
			<td><input type="checkbox" name="flavors" value="XL"></td>
		</tr>
		<tr>
			<td>Raspberries</td>
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
	
	<li> <a href=order.php><img src="images/button/specialityOrderButton.png" alt="Special Page" title="Special Page"></a></li>
	
	

</body>



</html>