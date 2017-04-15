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
	<p><form name="register" method="post" action="edit.php">
		<table width="600" align="center" cellpadding="0" cellspacing="1" border="1px solid black">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" style="padding-top: 10; padding-bottom: 10;"><strong><center>Profile</center></strong></td>
						</tr>
						<?php
							require "config.php";
							
							$fname = null;
							$lname = null;
							$address = null;
							$email = null;
							$phone = null;
							$cardNum = null;
							$cvc = null;
							$expire = null;
							$cardName = null;
							
							if (isset($_SESSION['email']))
							{
								$email = $_SESSION['email'];
								
								$query = mysqli_query($con, "SELECT * FROM tbAccount WHERE email='$email'");
								
								while ($row = mysqli_fetch_assoc($query)) {						
									foreach($row as $col => $val) {
										if ($col == 'email') {
											echo "<tr>
													<td style=\"padding-left: 10;\">Email:</td>
													<td style=\"padding-right: 10;\"><input name=\"email\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$email."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'fname') {
											$fname = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">First Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"fname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$fname."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'lname') {
											$lname = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Last Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"lname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$lname."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'address') {
											$address = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Address:</td>
													<td style=\"padding-right: 10;\"><input name=\"address\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$address."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'phone') {
											$phone = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Phone:</td>
													<td style=\"padding-right: 10;\"><input name=\"phone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$phone."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'cardNum') {
											$cardNum = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Card Number:</td>
													<td style=\"padding-right: 10;\"><input name=\"cardNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cardNum."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'securityCode') {
											$cvc = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Security Code:</td>
													<td style=\"padding-right: 10;\"><input name=\"cvc\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cvc."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'expireDate') {
											$expire = explode("/", $val);
											$month = $expire[0];
											$year = $expire[1];
											echo "<tr>
													<td style=\"padding-left: 10;\">Expiration Date:</td>
													<td style=\"padding-right: 10;\"><input name=\"month\" type=\"text\" style=\"font-size: 11pt; width: 19;\" value=\"".$month."\" readonly> / <input name=\"year\" type=\"text\" style=\"font-size: 11pt; width: 19;\" value=\"".$year."\" readonly></td>
												</tr>";
										}
										elseif ($col == 'cardName') {
											$cardName = $val;
											echo "<tr>
													<td style=\"padding-left: 10;\">Name on Card:</td>
													<td style=\"padding-right: 10;\"><input name=\"cardName\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cardName."\" readonly></td>
												</tr>";
										}
									}
								}
							}
						?>
						<tr>
							<td></td>
							<td><input type="submit" name="edit" value="Edit Profile" style="font-size: 11pt"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form></p>
</body>
</html> 