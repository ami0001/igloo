<?php
if (isset($_POST['submit']))
{
	require "addtable.php";
}

if (isset($_POST['drop']))
{
	$con=mysqli_connect("localhost","root","","dbIgloo");
	$null=0;
	
	$drop1 = "DROP TABLE tbAccount";
	$drop2 = "DROP TABLE tbMenu";
	$drop3 = "DROP TABLE tbOrder";
	
	if (mysqli_query($con, $drop1)) {
		echo "Table tbAccount was sucessfully dropped.\n";
	}
	else {
		echo 'Error dropping table: '.mysql_error($con)."\n";
	}
	
	if (mysqli_query($con, $drop2)) {
		echo "Table tbMenu was sucessfully dropped.\n";
	}
	else {
		echo 'Error dropping table: '.mysql_error($con)."\n";
	}
	
	if (mysqli_query($con, $drop3)) {
		echo "Table tbOrder was sucessfully dropped.\n";
	}
	else {
		echo 'Error dropping table: '.mysql_error($con)."\n";
	}
}
?>
<html>
<body>
<form action="admin.php" method="POST">
<input type="submit" name="submit" value="Add Tables"><br><br>
<input type="submit" name="drop" value="Drop Tables">
</form>
</body>
</html> 