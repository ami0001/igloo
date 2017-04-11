<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
	require "config.php";
	
	if (isset($_POST['place'])) {
		$item = $_POST['item'];
		$size = $_POST['size'];
		$style = $_POST['style'];
		
		if ($item == "" || $size == "" || $style == "") {
			echo "Must fill out all fields.";
		}
		
		$item = "INSERT INTO tbOrder (itemName, itemSize, orderStyle, orderType) VALUES ('$item', '$size', '$style','S')";
		if (mysqli_query($con,$item)) {
			header("location: order.php");
		}
		else {
			echo "Error inserting into table tbMenu: " . mysqli_error($con) . ".<br>";
		}  
	}
?>
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<title>Igloo</title>
 	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<form name="special" method="post" action="special.php">
	<div id="specialties">
	<p>
	<table align="center">
		<tr>
			<th>Item</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Select</th>
		</tr>
		<?php
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
				
				echo "<td><center><input type=\"radio\" name=\"item\" value=\"" . $itemName . "\"></center></td>";
			
				$itemCnt++;
			}
		?>
	</table>
	</p>
	<p>
	<table align="center">
		<tr>
			<th style="border-right: 1px solid #555555;">Sizes</th>
			<th> </th>
		</tr>
		<tr>
			<td><input type="radio" name="size" value="Snowflake"> Snowflake</td>
			<td><input type="radio" name="size" value="Icicle"> Icicle</td>
		</tr>
		<tr>
			<td><input type="radio" name="size" value="Iceberg"> Iceberg</td>
			<td><input type="radio" name="size" value="Glacier"> Glacier</td>
		</tr>
	</table>
	</p>
	<p>
	<table align="center">
		<tr>
			<th style="border-right: 1px solid #555555;">Style</th>
			<th> </th>
		</tr>
		<tr>
			<td><input type="radio" name="style" value="D"> Delivery</td>
			<td><input type="radio" name="style" value="C"> Carryout</td>
		</tr>
	</table>
	</p>
	</div>
	<p>
		<center><input type="submit" name="place" value="Place Order"></center>
	</p>
</body>
</html>