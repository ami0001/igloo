<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
	require "config.php";
?>
<head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<title>Igloo</title>
 	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<table>
	<tr>
	<td>
	<div id="specialties">
	<table style="display: inline-block; float: center;">
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
				
				echo "<td><center><input type=\"radio\" name=\"item\" value=\"" . $val . "\"></center></td>";
			
				$itemCnt++;
			}
		?>
	</table>
	</div>
	</td>
	<td>
	<div id="specialties">
	<table style="display: inline-block; float: center;">
		<tr>
			<th>Sizes</th>
			<th> </th>
		</tr>
		<tr>
			<td><input type="radio" name="size" value="S"> Snowflake</td>
			<td><input type="radio" name="size" value="M"> Icicle</td>
		</tr>
		<tr>
			<td><input type="radio" name="size" value="L"> Iceberg</td>
			<td><input type="radio" name="size" value="XL"> Glacier</td>
		</tr>
	</table>
	</div>
	</td>
	</tr>
	</table>
</body>
</html>