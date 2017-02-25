<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 	<meta http-equiv="Content-Type" content="text/html;  	charset=UTF-8" />
 	<title>Strawhacks</title>
 	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
 	<div id="container">
  		<div id="header">
   		<img src="images/header.png" alt="header" 					title="header" style="width:100%" />
    		</div>
    		<div id="sidebar">
      		<ul>
				<div id="sideheader1">
				<li>General</li>
				</div>
				<li><a href="index.php">Home</a></li>
				<li><a href="irc.php">IRC</a></li>
				<li><a href="forums.php">Forums</a></li>
				<li><a href="ranks.php">Ranks</a></li>
				<div id="sideheader2">
				<li>Challenges</li>
				</div>
				<li><a href="crypto.php">Crypto</a></li>
				<li><a href="stegano.php">Stegano</a></li>
				<li><a href="script.php">Script</a></li>
				<li><a href="web.php">Web</a></li>
				<li><a href="reverse.php">Reverse</a></li>
				<li><a href="nuggets.php">Nuggets</a></li>
				<li><a href="trivia.php">Trivia</a></li>
				<li><a href="recon.php">Recon</a></li>
			</ul>
		</div>
		<div id="mainContent">
			<div id="check">
			<?php
			//IF THE USER IS LOGGED IN THEN TELL THE USER, ELSE TELL THE USER TO LOG IN!
			session_start();
			require "config.php";

			//Check to see if the user is logged in.
			if(isset($_SESSION['username'])){
   				echo "<li>".$_SESSION['username']." | "."<a href='logout.php'>Logout</a>"."</li><br>";
			}
			else{
   				header("location: login.php");
			}
			?>
			</div>
			<table>
			<tr>
			<th>Number</th>
			<th>Title</th>
			<th>Author</th>
			<th>Solved</th>
			<th>Points</th>
			<th>Status</th>
			</tr>
			<tr>
			<td>1</td>
			<td><a href="crypto/crypto1.php">Pizza</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[19];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[3];} ?></td>
			</tr>
			<tr>
			<td>2</td>
			<td><a href="crypto/crypto2.php">Kissing Disease</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[20];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[4];} ?></td>				</tr>
			<tr>
			<td>3</td>
			<td><a href="crypto/crypto3.php">Equal Rights</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[21];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[5];} ?></td>				</tr>
			<tr>
			<td>4</td>
			<td><a href="crypto/crypto4.php">Setec Astronomy</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[22];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[6];} ?></td>
			</tr>
			<tr>
			<td>5</td>
			<td><a href="crypto/crypto5.php">2^5</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[23];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[7];} ?></td>
			</tr>
			<tr>
			<td>6</td>
			<td><a href="crypto/crypto6.php">All Is Fair in Love and War</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[24];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[8];} ?></td>
			</tr>
			<tr>
			<td>7</td>
			<td><a href="crypto/crypto7.php">Dot Dot Dot...</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[25];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[9];} ?></td>
			</tr>
			<tr>
			<td>8</td>
			<td><a href="crypto/crypto8.php">Alpha Numtauri</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[26];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[10];} ?></td>
			</tr>
			<tr>
			<td>9</td>
			<td><a href="crypto/crypto9.php">Group 17</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[27];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[11];} ?></td>
			</tr>
			<tr>
			<td>10</td>
			<td><a href="crypto/crypto10.php">Two Wrongs Definitely Make a Right</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[28];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[12];} ?></td>
			</tr>
			<tr>
			<td>11</td>
			<td><a href="crypto/crypto11.php">Sweet Sixteen</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[29];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[13];} ?></td>
			</tr>
			<tr>
			<td>12</td>
			<td><a href="crypto/crypto12.php">Dried Pork Skin</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[30];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[14];} ?></td>
			</tr>
			<tr>
			<td>13</td>
			<td><a href="crypto/crypto13.php">Acid</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[31];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[15];} ?></td>
			</tr>
			<tr>
			<td>14</td>
			<td><a href="crypto/crypto14.php">Polygons</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[32];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[16];} ?></td>
			</tr>
			<tr>
			<td>15</td>
			<td><a href="crypto/crypto15.php">Where's the dash?</a></td>
			<td>Luffy</td>
			<td><?php require "config.php"; $query = mysqli_query($con,"SELECT * FROM answers") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[33];} ?></td>
			<td>100</td>
			<td><?php require "config.php";	$user = $_SESSION['username']; $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query DB."); while($row = mysqli_fetch_array($query)){echo $row[17];} ?></td>
			</tr>
			</table>
			<br>
		</div>
		<br class="clearfloat" />
		<div id="footer">
			<p>Copyright &copy; 2014 Strawhats. All rights 					reserved.</p>
		</div>
	</div>
</body>
</html>