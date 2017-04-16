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
		
		(isset($_POST['nmonth'])) ? $nmonth = $_POST['nmonth'] : $nmonth = 0;
		(isset($_POST['nyear'])) ? $nyear = $_POST['nyear'] : $nyear = 16;
	?>
	<p><form name="edit" method="post" action="edit.php">
		<table width="700" align="center" cellpadding="0" cellspacing="1" border="1px solid black">
			<tr>
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" style="padding-top: 10; padding-bottom: 10;"><strong><center>Edit Profile</center></strong></td>
						</tr>
						<?php
							require "config.php";
							
							$fname = null;
							$lname = null;
							$address = null;
							$email = null;
							$pass = null;
							$phone = null;
							$cardNum = null;
							$cvc = null;
							$expire = null;
							$month = null;
							$year = null;
							$cardName = null;
							$oemail = null;
							
							if (isset($_SESSION['email'])) {
								$oemail = $_SESSION['email'];
								$email = $_SESSION['email'];
								$opass = $_SESSION['pass'];
								
								$query = mysqli_query($con, "SELECT * FROM tbAccount WHERE email='$email'");
								
								while ($row = mysqli_fetch_assoc($query)) {						
									foreach($row as $col => $val) {
										if ($col == 'email') {
											$email = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Email:</td>
													<td style=\"padding-right: 10;\"><input name=\"email\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$email."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Email:</td>
													<td style=\"padding-right: 10;\"><input name=\"nemail\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['nemail']) ? $_POST['nemail'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'pass') {
											$pass = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Password:</td>
													<td style=\"padding-right: 10;\"><input name=\"pass\" type=\"password\" style=\"width: 325; font-size: 11pt\" value=\"".$pass."\"></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Password:</td>
													<td style=\"padding-right: 10;\"><input name=\"npass\" type=\"password\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['npass']) ? $_POST['npass'] : ''; echo "\"></td>
												</tr></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'fname') {
											$fname = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current First Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"fname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$fname."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New First Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"nfname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['nfname']) ? $_POST['nfname'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'lname') {
											$lname = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Last Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"lname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$lname."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Last Name:</td>
													<td style=\"padding-right: 10;\"><input name=\"nlname\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['nlname']) ? $_POST['nlname'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'address') {
											$address = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Address:</td>
													<td style=\"padding-right: 10;\"><input name=\"address\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$address."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Address:</td>
													<td style=\"padding-right: 10;\"><input name=\"naddress\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['naddress']) ? $_POST['naddress'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'phone') {
											$phone = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Phone:</td>
													<td style=\"padding-right: 10;\"><input name=\"phone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$phone."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Phone:</td>
													<td style=\"padding-right: 10;\"><input name=\"nphone\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['nphone']) ? $_POST['nphone'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'cardNum') {
											$cardNum = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Card Number:</td>
													<td style=\"padding-right: 10;\"><input name=\"cardNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cardNum."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Card Number:</td>
													<td style=\"padding-right: 10;\"><input name=\"ncardNum\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['ncardNum']) ? $_POST['ncardNum'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'securityCode') {
											$cvc = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Security Code:</td>
													<td style=\"padding-right: 10;\"><input name=\"cvc\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cvc."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Security Code:</td>
													<td style=\"padding-right: 10;\"><input name=\"ncvc\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['ncvc']) ? $_POST['ncvc'] : ''; echo "\"></td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
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
													<td style=\"padding-left: 50;\">Current Expiration Date:</td>
													<td style=\"padding-right: 10;\"><input name=\"month\" type=\"text\" style=\"font-size: 11pt; width: 25;\" value=\"".$month."\" readonly> / <input name=\"year\" type=\"text\" style=\"font-size: 11pt; width: 25;\" value=\"".$year."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Expiration Date:</td>
													<td>
														<select name=\"nmonth\">
															<option disabled selected value></option>
															<option "; if ($nmonth == 1) echo 'selected'; echo " value=\"01\">01</option>
															<option "; if ($nmonth == 2) echo 'selected'; echo " value=\"02\">02</option>
															<option "; if ($nmonth == 3) echo 'selected'; echo " value=\"03\">03</option>
															<option "; if ($nmonth == 4) echo 'selected'; echo " value=\"04\">04</option>
															<option "; if ($nmonth == 5) echo 'selected'; echo " value=\"05\">05</option>
															<option "; if ($nmonth == 6) echo 'selected'; echo " value=\"06\">06</option>
															<option "; if ($nmonth == 7) echo 'selected'; echo " value=\"07\">07</option>
															<option "; if ($nmonth == 8) echo 'selected'; echo " value=\"08\">08</option>
															<option "; if ($nmonth == 9) echo 'selected'; echo " value=\"09\">09</option>
															<option "; if ($nmonth == 10) echo 'selected'; echo " value=\"10\">10</option>
															<option "; if ($nmonth == 11) echo 'selected'; echo " value=\"11\">11</option>
															<option "; if ($nmonth == 12) echo 'selected'; echo " value=\"12\">12</option>
														</select>
														/
														<select name=\"nyear\">
															<option disabled selected value></option>
															<option "; if ($nyear == 17) echo 'selected'; echo " value=\"17\">17</option>
															<option "; if ($nyear == 18) echo 'selected'; echo " value=\"18\">18</option>
															<option "; if ($nyear == 19) echo 'selected'; echo " value=\"19\">19</option>
															<option "; if ($nyear == 20) echo 'selected'; echo " value=\"20\">20</option>
															<option "; if ($nyear == 21) echo 'selected'; echo " value=\"21\">21</option>
														</select>
													</td>
												</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
										}
										elseif ($col == 'cardName') {
											$cardName = $val;
											echo "<tr>
													<td style=\"padding-left: 50;\">Current Name on Card:</td>
													<td style=\"padding-right: 10;\"><input name=\"cardName\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\"".$cardName."\" readonly></td>
												</tr>
												<tr>
													<td style=\"padding-left: 50;\">New Name on Card:</td>
													<td style=\"padding-right: 10;\"><input name=\"ncardName\" type=\"text\" style=\"width: 325; font-size: 11pt\" value=\""; echo isset($_POST['ncardName']) ? $_POST['ncardName'] : ''; echo "\"></td>
												</tr>";
										}
									}
								}
							}
						?>
						<tr>
							<td></td>
							<td><input type="submit" name="save" value="Save Changes" style="font-size: 11pt"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form></p>
	<?php
		require "config.php";
		if (isset($_POST['save'])) {
			if ($_POST['nemail'] == "" && $_POST['npass'] == "" && $_POST['nfname'] == "" && $_POST['nlname'] == "" && $_POST['naddress'] == "" && $_POST['nphone'] == "" && $_POST['ncardNum'] == "" && $_POST['ncvc'] == "" && !isset($_POST['nmonth']) && !isset($_POST['nyear']) && $_POST['ncardName'] == "") {
				echo "No information was changed.";
			}
			else {
				$pass  = $_POST['pass'];
				$npass = $_POST['npass'];
				$nemail = $_POST['nemail'];
				$naddress = $_POST['naddress'];
				$nphone = $_POST['nphone'];
				$nfname = $_POST['nfname'];
				$nlname = $_POST['nlname'];
				$ncardNum = $_POST['ncardNum'];
				$ncvc = $_POST['ncvc'];
				$ncardName = $_POST['ncardName'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$cardNum = $_POST['cardNum'];
				$cvc = $_POST['cvc'];
				$month = $_POST['month'];
				$year = $_POST['year'];
				$expire = $month.'/'.$year;
				$cardName = $_POST['cardName'];
				$nmonth = $_POST['nmonth'];
				$nyear = $_POST['nyear'];
				$nexpire = $nmonth.'/'.$nyear;
				
				$pass  = stripslashes($pass);
				$npass = stripslashes($npass);
				$nemail = stripslashes($nemail);
				$naddress = stripslashes($naddress);
				$nphone = stripslashes($nphone);
				$nfname = stripslashes($nfname);
				$nlname = stripslashes($nlname);
				$ncardNum = stripslashes($ncardNum);
				$ncvc = stripslashes($ncvc);
				$ncardName = stripslashes($ncardName);
				
				$npass = mysqli_real_escape_string($con, $npass);
				$nemail = mysqli_real_escape_string($con, $nemail);
				$naddress = mysqli_real_escape_string($con, $naddress);
				$nphone = mysqli_real_escape_string($con, $nphone);
				$nfname = mysqli_real_escape_string($con, $nfname);
				$nlname = mysqli_real_escape_string($con, $nlname);
				$ncardNum = mysqli_real_escape_string($con, $ncardNum);
				$ncvc = mysqli_real_escape_string($con, $ncvc);
				$ncardName = mysqli_real_escape_string($con, $ncardName);
				
				if ($nemail != "")
					$email = $nemail;
				if ($npass != "")
					$pass = $npass;
				if ($nfname != "")
					$fname = $nfname;
				if ($nlname != "")
					$lname = $nlname;
				if ($naddress != "")
					$address = $naddress;
				if ($nphone != "")
					$phone = $nphone;
				if ($ncardNum != "")
					$cardNum = $ncardNum;
				if ($ncvc != "")
					$cvc = $ncvc;
				if ($nmonth != "" && $nyear != "")
					$expire = $nexpire;
				if ($ncardName != "")
					$cardName = $ncardName;
				
				$update = "UPDATE tbAccount SET email='$email', pass='$pass', fname='$fname', lname='$lname', address='$address', phone='$phone', cardNum='$cardNum', securityCode='$cvc', expireDate='$expire', cardName='$cardName' WHERE email='$oemail'";      
					
				if (mysqli_query($con,$update)) {
					$_SESSION['email'] = $email;
					$_SESSION['pass'] = $pass;
					
					header("location: profile.php");
				}
				else {
					echo mysqli_error($con);
				}
			}
		}
	?>
</body>
</html> 