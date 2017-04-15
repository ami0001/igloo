<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body style="background-image:url('images/registerBackground.jpg'); background-size: 100% auto; background-repeat: no-repeat;">
	<?php
			require "check.php";
	?>
	<!-- Trying to center the table in the middle of the page -->
	<div id="register-spacer"></div>
	<!-- Trying to center the table in the middle of the page -->
	<p><form name="register" method="post" action="register.php">
		<table width="600" align="center" cellpadding="0" cellspacing="1" border="1px solid black">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" style="padding-top: 10; padding-bottom: 10;"><strong><center>Registration</center></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Email:</td>
							<td><input name="email" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Confirm Email:</td>
							<td><input name="cemail" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['cemail']) ? $_POST['cemail'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Password:</td>
							<td><input name="pass" type="password" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Confirm Password:</td>
							<td><input name="cpass" type="password" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['cpass']) ? $_POST['cpass'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">First Name:</td>
							<td><input name="fname" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Last Name:</td>
							<td><input name="lname" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Address:</td>
							<td><input name="address" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Phone:</td>
							<td><input name="phone" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Create Profile" style="font-size: 11pt"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form></p>
	<?php
		require "config.php";

		if (isset($_POST['submit'])) {
		   $pass  = $_POST['pass'];
		   $cpass = $_POST['cpass'];
		   $email = $_POST['email'];
		   $address = $_POST['address'];
		   $cemail = $_POST['cemail'];
		   $phone = $_POST['phone'];
		   $fname = $_POST['fname'];
		   $lname = $_POST['lname'];
			  
		   $pass  = stripslashes($pass);
		   $cpass = stripslashes($cpass);
		   $email = stripslashes($email);
		   $cemail = stripslashes($cemail);
		   $address = stripslashes($address);
		   $phone = stripslashes($phone);
		   $fname = stripslashes($fname);
		   $lname = stripslashes($lname);
		   
		   $pass  = mysqli_real_escape_string($con, $pass);
		   $cpass = mysqli_real_escape_string($con, $cpass);
		   $email = mysqli_real_escape_string($con, $email);
		   $cemail = mysqli_real_escape_string($con, $cemail);
		   $address = mysqli_real_escape_string($con, $address);
		   $phone = mysqli_real_escape_string($con, $phone);
		   $fname = mysqli_real_escape_string($con, $fname);
		   $lname = mysqli_real_escape_string($con, $lname);
		   
			if($pass == "" || $cpass == "" || $email == "" || $cemail == "" || $phone == "" || $fname == "" || $lname == "" || $address == "")
			{
				echo "One or more fields marked were left blank.";
			}
			else
			{
				if($pass != $cpass || $email != $cemail) {
					echo "Passwords or emails do not match.";
				}
				else
				{
					$query = mysqli_query($con,"SELECT * FROM tbAccount WHERE email = '$email'") or die("Cannot query the table!");
					 
					$row = mysqli_num_rows($query);
					if($row == 1) {
						echo "Email is already taken.";
					}
					else
					{
						$add = "INSERT INTO tbAccount (email, pass, fname, lname, phone, address) VALUES ('$email', '$pass', '$fname', '$lname', '$phone', '$address')";
						
						if (mysqli_query($con,$add)) {
							$_SESSION['email'] = $email;
							header("location: card.php");
						}
						else {
							echo mysqli_error($con);
						}	
					}
				}
			}
		}
	?>
</body>
</html> 