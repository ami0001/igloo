<?php
if (isset($_POST['submit']))
{
	require "adddb.php";
	require "addtable.php";
}

if (isset($_POST['drop']))
{
	$con=mysqli_connect("localhost","root","","dbIgloo");
	$null=0;
	
	$drop = 'DROP DATABASE dbIgloo';
	if (mysqli_query($con, $drop)) {
		echo "Database dbIgloo was sucessfully dropped.\n";
	}
	else {
		echo 'Error dropping database: '.mysql_error($con)."\n";
	}
}
?>
<html>
<body>
<form action="admin.php" method="POST">
<input type="submit" name="submit" value="Add Necessary Database and Tables"><br><br>
<input type="submit" name="drop" value="Drop Database">
</form>
</body>
</html> 