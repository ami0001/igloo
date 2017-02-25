<html>
<body>
<form action="admin.php" method="POST">
<input type="submit" name="submit" value="Add Necessary Database and Tables"><br><br>
<?php
if (isset($_POST['submit']))
{
	require "adddb.php";
	require "addtable.php";
}
?>
</form>
<a href="login.php">BACK</a>
</body>
</html> 