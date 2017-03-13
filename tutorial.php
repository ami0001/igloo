<html>
<head>
 	<!--<meta http-equiv="Content-Type" content="text/html;  	charset=UTF-8" />
 	<title>The Igloo</title>
 	<link href="style.css" rel=stylesheet type="text/css" />-->
</head>
<body>
<!--<p>
	<img src="images/header.png" alt="header" title="header" style="width: 100%;">
</p>-->
<form action="tutorial.php" method="POST">
	Username: <input name="user" type="text">
	Password: <input name="pass" type="password">
	<input name="submit" type="submit" value="Submit">
	<?php
	if (isset($_POST['submit']))
	{
		//Grab the username and password values submitted by the user and store the values
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		//Check if username or password that were submitted by the user are empty
		if ($user == "" || $pass == "")
		{
			//Print error (no need to loop because input check is done each time user submits)
			echo "<p>Phillip say you need to fill in all your info.</p>";
		}
	}
	?>
</form>
</body>
</html>