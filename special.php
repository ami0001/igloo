<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
 	<title>Igloo</title>
 	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body style = "background-color:#FFEFD5">
	<?php
		require "check.php";
	?>
	<p><form name="special" method="post" action="special.php">
		<div id="specialties" style="background-color:#FFEFD5">
			<p><table align="center">
				<!-- Space for the page layout -->
				<div id="customSpace">
				<tr>
					<th>Item</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Select</th>
				</tr>
				<?php
					require "config.php";
					
					$itemCnt = 1;
					$itemName = "";
					$query = mysqli_query($con, "SELECT * FROM tbMenu") or die("Cannot query the DB.");
					while ($row = mysqli_fetch_assoc($query)) {
						echo "<tr><td>" . $itemCnt . "</td>";
						
						foreach($row as $col => $val) {
							if ($col == 'itemName') {
								$itemName = $val;
								echo "<td>". $val . "</td>";
							}
							elseif ($col == 'itemDesc') {
								echo "<td>" . $val . "</td>";
							}
							elseif ($col == 'itemPrice') {
								echo "<td>$" . number_format($val, 2, '.', '') . "</td>";
							}
						}
						
						echo "<td><center><input type=\"radio\" name=\"item\" value=\"" . $itemName . "\"></center></td></tr>";
					
						$itemCnt++;
					}
				?>
			</table></p>
			<div id = "wrap">
				<div class = "left2">
					<p align = "center">
						<img src="images/smoothiePic4.jpg" alt="Login" style="width:500px;height:400px;border:5px solid #0033CC;">
					</p>

				</div>
				<div class = "right2">
					<p align = "center">
						<img src="images/smoothiePic45jpg.jpg" alt="Login" style="width:500px;height:400px;border:5px solid #0033CC;">
					</p>
				</div>
			</div>
			<!-- div id="customSpace" -->
			<p><table align="center">
				<div id="customSpace1">
				<tr>
					<th colspan="2" style="border-right: 1px solid #555555;">Select Size</th>
				</tr>
				<tr>
					<td><input type="radio" name="size" value="Snowflake"> Snowflake &nbsp;+$0.00</td>
					<td><input type="radio" name="size" value="Icicle"> Icicle &nbsp;&nbsp;&nbsp;+$1.00</td>
				</tr>
				<tr>
					<td><input type="radio" name="size" value="Iceberg"> Iceberg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+$2.00</td>
					<td><input type="radio" name="size" value="Glacier"> Glacier &nbsp;+$4.00</td>
				</tr>
			</table></p>
			<p><table align="center">
				<div id="customSpace1">
				<tr>
					<th colspan="2" style="border-right: 1px solid #555555;">Select Style</th>
				</tr>
				<tr>
					<td><input type="radio" name="style" value="Delivery"> Delivery</td>
					<td><input type="radio" name="style" value="Carryout"> Carryout</td>
				</tr>
			</table></p>
			<p><table align="center">
				<div id="customSpace1">
				<tr>
					<th colspan="2" style="border-right: 1px solid #555555;">Select Payment</th>
				</tr>
				<tr>
					<td><input type="radio" name="pay" value="Cash"> Cash</td>
					<td><input type="radio" name="pay" value="Credit"> Credit</td>
				</tr>
			</table></p>
		</div>
		<p>
			<center style="background-color:#FFEFD5">
				<div id="customSpace">
				<!-- input type="submit" name="place" value="Place Order" -->
				<input type="image" src="images/buttons/PlaceOrder.png" alt="Place Order" />
				<input type="hidden" name="place" value="Place Order"
			</center>
		</p>
	</form></p>
	<?php
		require "config.php";
		
		if (isset($_POST['place'])) {
			
			if (!isset($_POST['item']) || !isset($_POST['size']) || !isset($_POST['style']) || !isset($_POST['pay'])) {
				echo "Must fill out all fields.";
			}
			else {
				$item = $_POST['item'];
				$size = $_POST['size'];
				$style = $_POST['style'];
				$pay = $_POST['pay'];
				$price = 0.0;
				
				$query = mysqli_query($con, "SELECT * FROM tbMenu WHERE itemName = '$item'");
				while ($row = mysqli_fetch_assoc($query)) {
					foreach ($row as $col => $val) {
						if ($col == 'itemPrice') {
							$price = $price + $val;
						}
					}
				}
				
				if ($size == "Icicle")
					$price = $price + 1;
				elseif ($size == "Iceberg")
					$price = $price + 2;
				elseif ($size == "Glacier")
					$price = $price + 4;
					
				$price = $price + ($price * 0.09);
			
				$item = "INSERT INTO tbOrder (itemName, itemSize, orderStyle, orderType, payStyle, orderPrice) VALUES ('$item', '$size', '$style','Specialty','$pay','$price')";

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