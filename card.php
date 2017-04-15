<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<?php
		require "check.php";
		
		(isset($_POST['month'])) ? $month = $_POST['month'] : $month = 1;
		(isset($_POST['year'])) ? $year = $_POST['year'] : $year = 17;
	?>
	<p><form name="order" method="post" action="card.php">
		<table width="600" align="center" cellpadding="0" cellspacing="1" border="1px solid black">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" style="padding-top: 10; padding-bottom: 10;"><strong><center>Card Info</center></strong></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Card Number:</td>
							<td><input name="cardNum" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['cardNum']) ? $_POST['cardNum'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Security Code:</td>
							<td><input name="cvc" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['cvc']) ? $_POST['cvc'] : '' ?>"></td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Expiration Date:</td>
							<td>
								<select name="month">
									<option disabled selected value></option>
									<option <?php if ($month == 1 ) echo 'selected' ; ?> value="01">01</option>
									<option <?php if ($month == 2 ) echo 'selected' ; ?> value="02">02</option>
									<option <?php if ($month == 3 ) echo 'selected' ; ?> value="03">03</option>
									<option <?php if ($month == 4 ) echo 'selected' ; ?> value="04">04</option>
									<option <?php if ($month == 5 ) echo 'selected' ; ?> value="05">05</option>
									<option <?php if ($month == 6 ) echo 'selected' ; ?> value="06">06</option>
									<option <?php if ($month == 7 ) echo 'selected' ; ?> value="07">07</option>
									<option <?php if ($month == 8 ) echo 'selected' ; ?> value="08">08</option>
									<option <?php if ($month == 9 ) echo 'selected' ; ?> value="09">09</option>
									<option <?php if ($month == 10 ) echo 'selected' ; ?> value="10">10</option>
									<option <?php if ($month == 11 ) echo 'selected' ; ?> value="11">11</option>
									<option <?php if ($month == 12 ) echo 'selected' ; ?> value="12">12</option>
								</select>
								/
								<select name="year">
									<option disabled selected value></option>
									<option <?php if ($year == 17 ) echo 'selected' ; ?> value="17">17</option>
									<option <?php if ($year == 18 ) echo 'selected' ; ?> value="18">18</option>
									<option <?php if ($year == 19 ) echo 'selected' ; ?> value="19">19</option>
									<option <?php if ($year == 20 ) echo 'selected' ; ?> value="20">20</option>
									<option <?php if ($year == 21 ) echo 'selected' ; ?> value="21">21</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 50;">Name on Card:</td>
							<td><input name="cardName" type="text" style="width: 325; font-size: 11pt" value="<?php echo isset($_POST['cardName']) ? $_POST['cardName'] : '' ?>"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit Info">&nbsp;<input type="submit" name="skip" value="Do Later"></td>
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
		   $email = $_SESSION['email'];
		   $cardNum = $_POST['cardNum'];
		   $cvc = $_POST['cvc'];
		   $month = $_POST['month'];
		   $year = $_POST['year'];
		   $expire = $month.'/'.$year;
		   $cardName = $_POST['cardName'];
			
		   $cardNum = stripslashes($cardNum);
		   $cvc = stripslashes($cvc);
		   $cardName = stripslashes($cardName);
		   
		   $cardNum = mysqli_real_escape_string($con, $cardNum);
		   $cvc = mysqli_real_escape_string($con, $cvc);
		   $cardName = mysqli_real_escape_string($con, $cardName);
		   
		   if($cardNum == "" || $cvc == "" || $month == "" || $year == "" || $cardName == "")
		   {
				echo "One or more fields were left blank.";
		   }
		   else
		   {		 
				$update = "UPDATE tbAccount SET cardNum='$cardNum', securityCode='$cvc', expireDate='$expire', cardName='$cardName' WHERE email='$email'";      
				
				if (mysqli_query($con,$update)) {
					session_destroy();
					header("location: login.php");
				}
				else {
					echo mysqli_error($con);
				}
		   }
		}

		if(isset($_POST['skip'])) {
			session_destroy();
			header("location: login.php");
		}
	?>
</body>
</html> 