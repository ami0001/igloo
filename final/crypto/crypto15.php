<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 	<meta http-equiv="Content-Type" content="text/html;  	charset=UTF-8" />
 	<title>Strawhacks</title>
 	<link href="../style.css" rel=stylesheet type="text/css" />
</head>
<body>
 	<div id="container">
  		<div id="header">
   		<img src="../images/header.png" alt="header" 					title="header" style="width:100%" />
    		</div>
    		<div id="sidebar">
      		<ul>
				<div id="sideheader1">
				<li>General</li>
				</div>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../irc.php">IRC</a></li>
				<li><a href="../forums.php">Forums</a></li>
				<li><a href="../ranks.php">Ranks</a></li>
				<div id="sideheader2">
				<li>Challenges</li>
				</div>
				<li><a href="../crypto.php">Crypto</a></li>
				<li><a href="../stegano.php">Stegano</a></li>
				<li><a href="../script.php">Script</a></li>
				<li><a href="../web.php">Web</a></li>
				<li><a href="../reverse.php">Reverse</a></li>
				<li><a href="../nuggets.php">Nuggets</a></li>
				<li><a href="../trivia.php">Trivia</a></li>
				<li><a href="../recon.php">Recon</a></li>			</ul>
		</div>
		<div id="mainContent">
			<div id="check">
			<?php
			//IF THE USER IS LOGGED IN THEN TELL THE USER, ELSE TELL THE USER TO LOG IN!
			session_start();
			require "../config.php";

			//Check to see if the user is logged in.
			if(isset($_SESSION['username'])){
   				echo "<li>".$_SESSION['username']." | "."<a href='../logout.php'>Logout</a>"."</li>";
			}
			else{
   				header("location: ../login.php");
			}
			?>
			</div>
			<h1>Cryptography 15</h1>
			<center>
			<h2>.... ....  .. ...  . .....  /  ..... ..  ... ....  .... ..  ... .  . ....  /  ..... ..  .. ...  . .  .... ....  /  . .  /  .. ..  ... .  ... ....  .... ..  .. ....  ... ....  .... .....  .... ...  /  ... .....  ... .  . .  . ...  . .....  /  .... ...  . .....  . .....  . ...  /  .. .  .... ..  . .....  . .....  . ....  ... ....  ... ..  /  . .  ... ...  . ....  /  .. ....  .... ....  /  ..... ..  .. ....  ... .  ... .  /  ... .  .. ....  . .....  /  .... ...  .... ....  .... ..  . .....  .... ....  . ...  .. ...  . .....  . ....  /  ... ....  .... .....  .... ....  /  . ..  . .....  .. .  ... ....  .... ..  . .....  /  ..... ....  ... ....  .... .....  .... ..  /  . .....  ..... ....  . .....  .... ...  /  .. ....  .. .  /  .... ....  .. ...  . .....  /  . .....  ... ...  . ....  ... .  . .....  .... ...  .... ...  /  . ....  .... ..  . .....  . .  ... ..  /  .. ..  .... .....  .. ....  . ....  . .....  .... ...  /  ..... ....  ... ....  .... .....  .... ..  /  .... ..  . .....  .... ...  .... ....  ... .  . .....  .... ...  .... ...  /  .... ...  ... .....  .. ....  .... ..  .. ....  .... ....  /  .... ...  . .....  .. ....  ..... .....  . .....  /  .. ....  .... ....  /  .... ..  . .  .. ....  .... ...  . .....  /  ..... ....  ... ....  .... .....  .... ..  /  .. .  ... .  . .  .. ..  /  . .  ... ...  . ....  /  .... ...  .... ....  . .  ... ...  . ....  /  .... ....  . .  ... .  ... .  /  .. .  ... .  . .  .. ..  /  .. ....  .... ...  /  .... ....  . .  . ...  ... ....  ..... ....  . .  . ...  .. ....</h2>			
			<form action="crypto15.php" method="POST">
			<p>Flag: <input type="text" name="crypto15" /> <input type="submit" value="Submit" /></p>
			<?php
			require "solved15.php";
			?>
			</form>
			<p><br><a href="crypto14.php"><< Prev</a> | <a href="../crypto.php">Next >></a></p>
			</center>  
			<center><img src="../images/wallpaper.jpg" style="width: 90%;">					</center>
			<br>
		</div>
		<br class="clearfloat" />
		<div id="footer">
			<p>Copyright &copy; 2014 Strawhats. All rights 					reserved.</p>
		</div>
	</div>
</body>
</html>
	