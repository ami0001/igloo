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
		
		(isset($_POST['month'])) ? $month = $_POST['month'] : $month = 0;
		(isset($_POST['year'])) ? $year = $_POST['year'] : $year = 16;
	?>
	<p><form name="order" method="post" action="order.php">
	<table align="center" cellpadding="0" cellspacing="1" border="1px solid black">
	<tr>
		<td>
			<table border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" style="padding: 10;">
				<tr>
					<td colspan="3" style="padding-bottom: 10;"><strong><center>Customer Information</center></strong></td>
				</tr>
				<?php
					$fname = null;
					$lname = null;
					$address = null;
					$email = null;
					$phone = null;
					$cardNum = null;
					$cvc = null;
					$expire = null;
					$cardName = null;
					$month = null;
					$year = null;
					
					if (isset($_SESSION['orderNum'])) {
						if (isset($_SESSION['email']) && isset($_SESSION['orderNum'])) {
							require "config.php";
							
							$email = $_SESSION['email'];
							
							$query = mysqli_query($con, "SELECT * FROM tbAccount WHERE email='$email'");
							
							if (isset($_SESSION['payStyle'])) {
								if ($_SESSION['payStyle'] == 'Credit') {
									while ($row = mysqli_fetch_assoc($query)) {						
										foreach($row as $col => $val) {
											if ($col == 'email') {
												echo "<tr>
														<td style=\"padding-left: 10;\">Email:</td>
														<td style=\"padding-right: 10;\"><input name=\"email\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$email."\"></td>
													</tr>";
											}
											elseif ($col == 'fname') {
												$fname = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">First Name:</td>
														<td style=\"padding-right: 10;\"><input name=\"fname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$fname."\"></td>
													</tr>";
											}
											elseif ($col == 'lname') {
												$lname = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Last Name:</td>
														<td style=\"padding-right: 10;\"><input name=\"lname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$lname."\"></td>
													</tr>";
											}
											elseif ($col == 'address') {
												$address = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Address:</td>
														<td style=\"padding-right: 10;\"><input name=\"address\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$address."\"></td>
													</tr>";
											}
											elseif ($col == 'phone') {
												$phone = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Phone:</td>
														<td style=\"padding-right: 10;\"><input name=\"phone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$phone."\"></td>
													</tr>";
											}
											elseif ($col == 'cardNum') {
												$cardNum = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Card Number:</td>
														<td style=\"padding-right: 10;\"><input name=\"cardNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cardNum."\"></td>
													</tr>";
											}
											elseif ($col == 'securityCode') {
												$cvc = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Security Code:</td>
														<td style=\"padding-right: 10;\"><input name=\"cvc\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cvc."\"></td>
													</tr>";
											}
											elseif ($col == 'expireDate') {
												$expire = explode("/", $val);
												
												if ($expire[0] == "" || $expire[1] == "") {
													$month = null;
													$year = null;
												}
												else {
													$month = $expire[0];
													$year = $expire[1];
												}
												
												echo "<tr>
														<td style=\"padding-left: 10;\">Expiration Date:</td>
														<td>
															<select name=\"month\">
																<option disabled selected value></option>
																<option "; if ($month == 1) echo 'selected'; echo " value=\"01\">01</option>
																<option "; if ($month == 2) echo 'selected'; echo " value=\"02\">02</option>
																<option "; if ($month == 3) echo 'selected'; echo " value=\"03\">03</option>
																<option "; if ($month == 4) echo 'selected'; echo " value=\"04\">04</option>
																<option "; if ($month == 5) echo 'selected'; echo " value=\"05\">05</option>
																<option "; if ($month == 6) echo 'selected'; echo " value=\"06\">06</option>
																<option "; if ($month == 7) echo 'selected'; echo " value=\"07\">07</option>
																<option "; if ($month == 8) echo 'selected'; echo " value=\"08\">08</option>
																<option "; if ($month == 9) echo 'selected'; echo " value=\"09\">09</option>
																<option "; if ($month == 10) echo 'selected'; echo " value=\"10\">10</option>
																<option "; if ($month == 11) echo 'selected'; echo " value=\"11\">11</option>
																<option "; if ($month == 12) echo 'selected'; echo " value=\"12\">12</option>
															</select>
															/
															<select name=\"year\">
																<option disabled selected value></option>
																<option "; if ($year == 17) echo 'selected'; echo " value=\"17\">17</option>
																<option "; if ($year == 18) echo 'selected'; echo " value=\"18\">18</option>
																<option "; if ($year == 19) echo 'selected'; echo " value=\"19\">19</option>
																<option "; if ($year == 20) echo 'selected'; echo " value=\"20\">20</option>
																<option "; if ($year == 21) echo 'selected'; echo " value=\"21\">21</option>
															</select>
														</td>
													</tr>";
											}
											elseif ($col == 'cardName') {
												$cardName = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Name on Card:</td>
														<td style=\"padding-right: 10;\"><input name=\"cardName\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cardName."\"></td>
													</tr>";
											}
										}
									}
								}
								elseif ($_SESSION['payStyle'] == 'Cash') {
									while ($row = mysqli_fetch_assoc($query)) {						
										foreach($row as $col => $val) {
											if ($col == 'email') {
												echo "<tr>
														<td style=\"padding-left: 10;\">Email:</td>
														<td style=\"padding-right: 10;\"><input name=\"email\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$email."\"></td>
													</tr>";
											}
											elseif ($col == 'fname') {
												$fname = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">First Name:</td>
														<td style=\"padding-right: 10;\"><input name=\"fname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$fname."\"></td>
													</tr>";
											}
											elseif ($col == 'lname') {
												$lname = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Last Name:</td>
														<td style=\"padding-right: 10;\"><input name=\"lname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$lname."\"></td>
													</tr>";
											}
											elseif ($col == 'address') {
												$address = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Address:</td>
														<td style=\"padding-right: 10;\"><input name=\"address\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$address."\"></td>
													</tr>";
											}
											elseif ($col == 'phone') {
												$phone = $val;
												echo "<tr>
														<td style=\"padding-left: 10;\">Phone:</td>
														<td style=\"padding-right: 10;\"><input name=\"phone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$phone."\"></td>
													</tr>";
											}
										}
									}
								}
							}
						}
						else {
							if (isset($_SESSION['payStyle'])) {
								if ($_SESSION['payStyle'] == 'Credit') {
									echo "<tr>
											<td style=\"padding-left: 10;\">Email:</td>
											<td><input name=\"email\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['email']) ? $_POST['email'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">First Name:</td>
											<td style=\"padding-right: 10;\"><input name=\"fname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['fname']) ? $_POST['fname'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Last Name:</td>
											<td><input name=\"lname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['lname']) ? $_POST['lname'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Address:</td>
											<td><input name=\"address\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['address']) ? $_POST['address'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Phone:</td>
											<td><input name=\"phone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['phone']) ? $_POST['phone'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Card Number:</td>
											<td><input name=\"cardNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['cardNum']) ? $_POST['cardNum'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Security Code:</td>
											<td><input name=\"cvc\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['cvc']) ? $_POST['cvc'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Expiration Date:</td>
											<td>
												<select name=\"month\">
													<option disabled selected value></option>
													<option "; if ($month == 1) echo 'selected'; echo " value=\"01\">01</option>
													<option "; if ($month == 2) echo 'selected'; echo " value=\"02\">02</option>
													<option "; if ($month == 3) echo 'selected'; echo " value=\"03\">03</option>
													<option "; if ($month == 4) echo 'selected'; echo " value=\"04\">04</option>
													<option "; if ($month == 5) echo 'selected'; echo " value=\"05\">05</option>
													<option "; if ($month == 6) echo 'selected'; echo " value=\"06\">06</option>
													<option "; if ($month == 7) echo 'selected'; echo " value=\"07\">07</option>
													<option "; if ($month == 8) echo 'selected'; echo " value=\"08\">08</option>
													<option "; if ($month == 9) echo 'selected'; echo " value=\"09\">09</option>
													<option "; if ($month == 10) echo 'selected'; echo " value=\"10\">10</option>
													<option "; if ($month == 11) echo 'selected'; echo " value=\"11\">11</option>
													<option "; if ($month == 12) echo 'selected'; echo " value=\"12\">12</option>
												</select>
												/
												<select name=\"year\">
													<option disabled selected value></option>
													<option "; if ($year == 17) echo 'selected'; echo " value=\"17\">17</option>
													<option "; if ($year == 18) echo 'selected'; echo " value=\"18\">18</option>
													<option "; if ($year == 19) echo 'selected'; echo " value=\"19\">19</option>
													<option "; if ($year == 20) echo 'selected'; echo " value=\"20\">20</option>
													<option "; if ($year == 21) echo 'selected'; echo " value=\"21\">21</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Name on Card:</td>
											<td><input name=\"cardName\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['cardName']) ? $_POST['cardName'] : ''; echo "\"></td>
										</tr>";
								}
								elseif ($_SESSION['payStyle'] == 'Cash') {
									echo "<tr>
											<td style=\"padding-left: 10;\">Email:</td>
											<td><input name=\"email\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['email']) ? $_POST['email'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">First Name:</td>
											<td style=\"padding-right: 10;\"><input name=\"fname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['fname']) ? $_POST['fname'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Last Name:</td>
											<td ><input name=\"lname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['lname']) ? $_POST['lname'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Address:</td>
											<td><input name=\"address\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['address']) ? $_POST['address'] : ''; echo "\"></td>
										</tr>
										<tr>
											<td style=\"padding-left: 10;\">Phone:</td>
											<td><input name=\"phone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['phone']) ? $_POST['phone'] : ''; echo "\"></td>
										</tr>";
								}
							}
						}
					}
				?>
			</table>
		</td>
		<td>
			<table border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" style="padding: 10;">
				<tr>
					<td colspan="3" style="padding-bottom: 10;"><strong><center>Order Summary</center></strong></td>
				</tr>
				<?php
					if (isset($_SESSION['orderNum'])) {
						require "config.php";
						
						$orderNum = $_SESSION['orderNum'];
						$orderTime = $_SESSION['orderTime'];
						$payStyle = $_SESSION['payStyle'];
						$orderStyle = null;
						$itemName = null;
						$itemSize = null;
						$flavors = null;
						$toppings = null;
						$price = null;
						
						$query = mysqli_query($con, "SELECT * FROM tbOrder WHERE orderNum='$orderNum'");
						
						if (isset($_SESSION['orderType'])) {
							$orderType = $_SESSION['orderType'];
							if ($_SESSION['orderType'] == 'Specialty') {
								while ($row = mysqli_fetch_assoc($query)) {						
									foreach($row as $col => $val) {
										if ($col == 'orderNum') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Order Number:</td>
													<td style=\"padding-right: 10;\"><input name=\"orderNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$orderNum."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'orderType') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Order Type:</td>
													<td style=\"padding-right: 10;\"><input name=\"orderType\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$orderType."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'orderStyle') {
											$orderStyle = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Order Style:</td>
													<td style=\"padding-right: 10;\"><input name=\"orderStyle\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$orderStyle."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'itemName') {
											$itemName = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Item Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"itemName\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$itemName."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'itemSize') {
											$itemSize = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Item Size:</td>
													<td style=\"padding-right: 10;\"><input name=\"itemSize\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$itemSize."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'orderPrice') {
											$price = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Price with Tax:</td>
													<td style=\"padding-right: 10;\"><input name=\"price\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"$".number_format($price, 2, '.', '')."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'payStyle') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Payment Style:</td>
													<td style=\"padding-right: 10;\"><input name=\"payStyle\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$payStyle."\" readonly></td>
												</tr>";
										}
									}
								}
							}
							elseif ($_SESSION['orderType'] == 'Custom') {
								while ($row = mysqli_fetch_assoc($query)) {						
									foreach($row as $col => $val) {
										if ($col == 'orderNum') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Order Number:</td>
													<td style=\"padding-right: 10;\"><input name=\"orderNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$orderNum."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'orderType') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Order Type:</td>
													<td style=\"padding-right: 10;\"><input name=\"orderType\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$orderType."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'orderStyle') {
											$orderStyle = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Order Style:</td>
													<td style=\"padding-right: 10;\"><input name=\"orderStyle\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$orderStyle."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'itemSize') {
											$itemSize = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Item Size:</td>
													<td style=\"padding-right: 10;\"><input name=\"itemSize\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$itemSize."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'flavors') {
											$flavors = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Flavor(s):</td>
													<td style=\"padding-right: 10;\"><input name=\"flavors\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$flavors."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'toppings') {
											$toppings = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Topping(s):</td>
													<td style=\"padding-right: 10;\"><input name=\"toppings\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$toppings."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'orderPrice') {
											$price = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Price with Tax:</td>
													<td style=\"padding-right: 10;\"><input name=\"price\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"$".number_format($price, 2, '.', '')."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'payStyle') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Payment Style:</td>
													<td style=\"padding-right: 10;\"><input name=\"payStyle\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$payStyle."\" readonly></td>
												</tr>";
										}
									}
								}
							}
						}
					}
				?>
				<tr>
					<td></td>
					<td><input type="submit" name="confirm" value="Confirm Order">&nbsp;<input type="submit" name="cancel" value="Cancel Order"></td>
			</table>
		</td>
	</tr>
	</table>
	</form></p>
	<?php
		require "config.php";

		if(isset($_POST['confirm']))
		{
		   $fname = $_POST['fname'];
		   $lname = $_POST['lname'];
		   $address = $_POST['address'];
		   $email = $_POST['email'];
		   $phone = $_POST['phone'];
		   
		   $fname = stripslashes($fname);
		   $lname = stripslashes($lname);
		   $address = stripslashes($address);
		   $email = stripslashes($email);
		   $phone = stripslashes($phone);
		   
		   echo $email;
		   
		   $fname  = mysqli_real_escape_string($con, $fname);
		   $lname = mysqli_real_escape_string($con, $lname);
		   $address = mysqli_real_escape_string($con, $address);
		   $email = mysqli_real_escape_string($con, $email);
		   $phone = mysqli_real_escape_string($con, $phone);
		   
		   if (isset($_SESSION['payStyle'])) {
			   if ($_SESSION['payStyle'] == 'Credit') {
				   if($_POST['fname'] == "" || $_POST['lname'] == "" || $_POST['address'] == "" || $_POST['email'] == "" || $_POST['phone'] == "" || $_POST['cardNum'] == "" || $_POST['cvc'] == "" || !isset($_POST['month']) || !isset($_POST['year']) || $_POST['cardName'] == "")
				   {
						echo "One or more fields were left blank.";
				   }
				   else
				   {
						$cardNum = $_POST['cardNum'];
						$cvc = $_POST['cvc'];
						$month = $_POST['month'];
						$year = $_POST['year'];
						$expire = $month.'/'.$year;
						$cardName = $_POST['cardName'];
						$creditEmail = "";
					   
						$cardNum = stripslashes($cardNum);
						$cvc = stripslashes($cvc);
						$cardName = stripslashes($cardName);
					   
						$cardNum = mysqli_real_escape_string($con, $cardNum);
						$cvc = mysqli_real_escape_string($con, $cvc);
						$cardName = mysqli_real_escape_string($con, $cardName);
						
						$update = "UPDATE tbOrder set fname='$fname', lname='$lname', address='$address', email='$email', phone='$phone', cardNum='$cardNum', securityCode='$cvc', expireDate='$expire', cardName='$cardName' WHERE orderNum='$orderNum'";
						
						if (mysqli_query($con, $update)){
							$creditEmail = "Order Time: $orderTime\nOrder Number: $orderNum\nOrder Style: $orderStyle\nOrder Type: $orderType\nItem Size: $itemSize\nName: $fname $lname\nAddress: $address\nPhone: $phone\nPrice: \$" . number_format($price, 2, '.', '') . "\nPayment: $payStyle";
							mail($email, "The Igloo - Order Confirmation for '$email'", $creditEmail);
							header("location: index.php");
						}
						else {
							echo mysqli_error($con);
						} 
				   }
			   }
			   elseif ($_SESSION['payStyle'] == 'Cash') {
				   if($fname == "" || $lname == "" || $address == "" || $email == "" || $phone == "")
				   {
						echo "One or more fields were left blank.";
				   }
				   else
				   {
						$cashEmail = "";
						
						$update = "UPDATE tbOrder set fname='$fname', lname='$lname', address='$address', email='$email', phone='$phone' WHERE orderNum='$orderNum'";
						
						if (mysqli_query($con, $update)){
							$cashEmail = "Order Time: $orderTime\nOrder Number: $orderNum\nOrder Style: $orderStyle\nOrder Type: $orderType\nItem Size: $itemSize\nName: $fname $lname\nAddress: $address\nPhone: $phone\nPrice: \$" . number_format($price, 2, '.', '') . "\nPayment: $payStyle";
							mail($email, "The Igloo - Order Confirmation for '$email'", $cashEmail);
							header("location: index.php");
						}
						else {
							echo mysqli_error($con);
						} 
				   }
			   }
		   }
		}

		if(isset($_POST['cancel'])){
			$item = "DELETE FROM tbOrder WHERE orderNum = '$orderNum'";
			if (mysqli_query($con,$item)) {
				header("location: index.php");
			}
			else {
				echo mysqli_error($con);
			}  
		}
	?>
</body>
</html> 