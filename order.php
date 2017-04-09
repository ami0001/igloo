<?php
session_start();

require "config.php";

if(isset($_POST['confirm']))
{
   $fname  = $_POST['fname'];
   $lname = $_POST['cpass'];
   $address = $_POST['email'];
   $email = $_POST['cemail'];
   $phone = $_POST['phone'];
   $cardNum = $_POST['fname'];
   $cvc = $_POST['lname'];
   $expire = $_POST['month'].'/'.$_POST['year'];
   $cardName = $_POST['cardName'];
	
   $fname  = stripslashes($fname);
   $lname = stripslashes($lname);
   $address = stripslashes($address);
   $email = stripslashes($email);
   $phone = stripslashes($phone);
   $cardNum = stripslashes($cardNum);
   $cvc = stripslashes($cvc);
   $expire = stripslashes($expire);
   $cardName = stripslashes($cardName);
   
   $fname  = mysqli_real_escape_string($con, $fname);
   $lname = mysqli_real_escape_string($con, $lname);
   $address = mysqli_real_escape_string($con, $address);
   $email = mysqli_real_escape_string($con, $email);
   $phone = mysqli_real_escape_string($con, $phone);
   $cardNum = mysqli_real_escape_string($con, $cardNum);
   $cvc = mysqli_real_escape_string($con, $cvc);
   $expire = mysqli_real_escape_string($con, $expire);
   $cardName = mysqli_real_escape_string($con, $cardName);
   
   if($fname == "" || $lname == "" || $address == "" || $email == "" || $phone == "" || $cardNum == "" || $cvc == "" || $expire == "" || $cardName == "")
   {
		echo "One or more fields were left blank.";
   }
   else
   {
		$query = mysqli_query($con,"SELECT * FROM tbAccount WHERE email = '$email'") or die("Cannot query the table!");
		 
		$add = mysqli_query($con,"UPDATE tbOrder set fname, lname, address, email, phone, cardNum, securityCode, expireDate, cardName) VALUES ('$fname', '$lname','$address','$email','$phone','$cardNum','$cvc','$expire','$cardName')") or die("Can't insert.");      
   }
}

//if(isset($_POST['cancel'])){}
?>

<html>
<head>
	<t<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<div id="check">
	<?php
		if(isset($_SESSION['email']))
			echo "<li>".$_SESSION['email']." | "."<a href='logout.php'>Logout</a>"."</li><br>";
	?>
	</div>
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
					<td><input name="cvc" type="text" style="width: 325; font-size: 11pt"></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Expiration Date:</td>
					<td>
						<select name="month">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						/
						<select name="year">
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
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
					<td style="padding-right: 10;"><input name="fname" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Size:</td>
					<td><input name="lname" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Flavor(s):</td>
					<td><input name="email" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Topping(s):</td>
					<td><input name="email" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Price:</td>
					<td><input name="phone" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Order Style:</td>
					<td><input name="user" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td style="padding-left: 10;">Order Number:</td>
					<td><input name="user" type="text" style="width: 325; font-size: 11pt" readonly></td>
				</tr>
				<tr>
					<td><input type="submit" name="confirm" value="Confirm Order" style="font-size: 11pt"></td>
					<td><input type="submit" name="confirm" value="Cancel Order" style="font-size: 11pt"></td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</form>
</body>
</html> 