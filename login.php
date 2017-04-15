<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body style="background-image:url('images/loginBackground2.jpg'); background-size: 100% auto; background-repeat: no-repeat;">
	<?php
		require "check.php";
	?>
	<p><form name="register" method="post" action="login.php">
		<table width="600" align="center" cellpadding="0" cellspacing="1" border="1px solid black">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" style="padding-top: 10; padding-bottom: 10;"><strong><center>Login</center></strong></td>
						</tr>
						<tr>
							<td width="78" style="padding-left: 50;">Email:</td>
							<td><input name="email" type="text" style="width: 350;"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Password:</td>
							<td><input name="pass" type="password" style="width: 350;"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Login"> | <a href="register.php">Register</a></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form></p>
	<?php
	require "config.php";

	if(isset($_POST['submit']))
	{
	   //Variables from the table
	   $email  = $_POST['email'];
	   $pass  = $_POST['pass'];
		  
	   //Prevent MySQL Injections
	   $email  = stripslashes($email);
	   $pass  = stripslashes($pass);
	   
	   $email  = mysqli_real_escape_string($con, $email);
	   $pass  = mysqli_real_escape_string($con, $pass);
	   
	   if($email == "" || $pass == "")
	   {
		  echo "Email or password is missing.";
	   }
	   else
	   {
		  $query = mysqli_query($con,"SELECT * FROM tbAccount WHERE email = '$email' and pass = '$pass'") or die("Can not query DB.");
		  $count = mysqli_num_rows($query);
		  
		  if($count == 1){
			 $_SESSION['email'] = $email;
			 $_SESSION['pass'] = $pass;
			 header ("location: index.php");
		  }
		  
		  else{
			 echo "Email or password does not match any account in the database.";
		  }
	   }
	}
?>
</body>
</html> 