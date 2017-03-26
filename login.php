<?php
session_start();
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
         header ("location: index.php");
      }
      
      else{
         echo "Email or password does not match any account in the database.";
      }
   }
}
?>

<html>
<head>
	<title>The Igloo</title>
</head>
<body>
	<table width="600" align="center" cellpadding="0" cellspacing="1" border="1px solid black">
	<tr>
	<form name="register" method="post" action="login.php">
		<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
					<td colspan="3"><strong><center>Login</center></strong></td>
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
	</form>
	</tr>
	</table>
</body>
</html> 