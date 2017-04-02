<?php
session_start();

require "config.php";

if(isset($_SESSION['email'])){
   header("location: index.php");
}

if(isset($_POST['submit']))
{
   $pass  = $_POST['pass'];
   $cpass = $_POST['cpass'];
   $email = $_POST['email'];
   $cemail = $_POST['cemail'];
   $phone = $_POST['phone'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
      
   $pass  = stripslashes($pass);
   $cpass = stripslashes($cpass);
   $email = stripslashes($email);
   $cemail = stripslashes($cemail);
   $phone = stripslashes($phone);
   $fname = stripslashes($fname);
   $lname = stripslashes($lname);
   
   $pass  = mysqli_real_escape_string($con, $pass);
   $cpass = mysqli_real_escape_string($con, $cpass);
   $email = mysqli_real_escape_string($con, $email);
   $cemail = mysqli_real_escape_string($con, $cemail);
   $phone = mysqli_real_escape_string($con, $phone);
   $fname = mysqli_real_escape_string($con, $fname);
   $lname = mysqli_real_escape_string($con, $lname);
   
   if($pass == "" || $cpass == "" || $email == "" || $cemail == "" || $phone == "" || $fname == "" || $lname == "")
   {
      echo "One or more fields marked by * were left blank.";
   }
   
   else
   {
      if($pass != $cpass || $email != $cemail)
      {
		  echo "Passwords or emails do not match.";
      }
      else
      {
         $query = mysqli_query($con,"SELECT * FROM tbAccount WHERE email = '$email'") or die("Cannot query the table!");
         
         $row = mysqli_num_rows($query);
         if($row == 1)
         {
            echo "Email is already taken.";
         }
         else
         {
            $add = mysqli_query($con,"INSERT INTO tbAccount (email, pass, fname, lname, phone) VALUES ('$email', '$pass', '$fname', '$lname', '$phone')") or die("Can't insert.");
			header("location: login.php");
         }  echo "Registration successful.";      
      }      
   }
}
?>

<html>
<head>
	<t<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<form name="order" method="post" action="order.php">
	<table align="center" cellpadding="0" cellspacing="1" border="1px solid black">
	<tr>
		<td>
			<table border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" style="padding: 10;">
				<tr>
					<td colspan="3"><strong><center>Customer Information</center></strong></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">First Name:</td>
					<td style="padding-right: 10;"><input name="fname" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Last Name:</td>
					<td ><input name="lname" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Address:</td>
					<td><input name="email" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Email:</td>
					<td><input name="email" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Phone:</td>
					<td><input name="phone" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Card Number:</td>
					<td><input name="user" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Security Code:</td>
					<td><input name="svn" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Expiration Date:</td>
					<td>
						<select name="month">
							<option value="jan">01</option>
							<option value="feb">02</option>
							<option value="mar">03</option>
							<option value="apr">04</option>
							<option value="may">05</option>
							<option value="jun">06</option>
							<option value="jul">07</option>
							<option value="aug">08</option>
							<option value="sep">09</option>
							<option value="oct">10</option>
							<option value="nov">11</option>
							<option value="dec">12</option>
						</select>
						/
						<select name="year">
							<option value="y2k17">17</option>
							<option value="y2k18">18</option>
							<option value="y2k19">19</option>
							<option value="y2k20">20</option>
							<option value="y2k21">21</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Name on Card:</td>
					<td><input name="cardName" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
			</table>
		</td>
		<td>
			<table border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" style="padding: 10;">
				<tr>
					<td colspan="3"><strong><center>Order Summary</center></strong></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Item:</td>
					<td style="padding-right: 10;"><input name="fname" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Size:</td>
					<td><input name="lname" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Flavor(s):</td>
					<td><input name="email" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Topping(s):</td>
					<td><input name="email" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Price:</td>
					<td><input name="phone" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Order Style:</td>
					<td><input name="user" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="confirm" value="Confirm Order" style="font-size: 11pt"></td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</form>
</body>
</html> 