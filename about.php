<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body style="background-color:#FFEFD5">
	<?php
		require "check.php";
	?>
	
	<!-- div id="header">
		<h1>About Page</h1>
	</div> <!-- End of header -->
	
	<!-- Making space for the about page -->
	<!-- div id="tableSpace1"></div -->
	<!-- div id="tableSpace1"></div -->
	<!-- div id="tableSpace1"></div -->
	
	<div id = "wrap">
				<div class = "left3">
					<p id = "customFont" align = "center">
						Sample Pictures of our Services
					</p>
					<img src="images/smoothiePic2.jpg" alt="Login" style="width:420px;height:350px;border:5px solid #0033CC;">
					<div id="tableSpace1"></div>
					<img src="images/smootiePic3.jpg" alt="Login" style="width:420px;height:340px;border:5px solid #0033CC;">

				</div>
				<div class = "right2">
					<p id = "customFont" align = "center">
						Dr. Aygun: Manager
					</p>
					<img src="images/Teacher.jpg" alt="Login" style="width:220px;height:200px;border:5px solid #0033CC;">
					<p id = "customFont" align = "center">
						Alex Indihar: Web Developer
					</p>
					<img src="images/alex.png" alt="Login" style="width:220px;height:200px;border:5px solid #0033CC;">
					<p id = "customFont" align = "center">
						Jonathan Shields: Web Developer
					</p>
					<img src="images/JonJon.jpg" alt="Login" style="width:220px;height:200px;border:5px solid #0033CC;">
				</div>
	</div>
	<div id="tableSpace1"></div>
	<div id="tableSpace1"></div>
	<div id="tableSpace1"></div>
	<div id="tableSpace1"></div>
	<div id="tableSpace1"></div>
	<div id="mainContent3" style="width:500px;height:440px;border:5px solid #0033CC;">
		
			<!-- Attempting to include a picture for the home page -->
			<center>
				<p>
					Description of the Project
				</p>
			</center>
				<p>
					This application is an online service that will allow you to order a smoothie online. Our smoothies are the best
					in the world and we are proud to be able to allow you the chance to order them. 
				</p>
				<p>
					This application will allow you to order a smoothie and have it delivered to your door steps or ready for pickup
					at the local store. 
				</p>
				<p>
					This application will also allow you to make an account with the website. Registered users will have an easier time
					placing a order because their contact information will be stored within our database. Registere users will not have
					to fill in the "customer information" section because their personal data will be pulled in from the database
				</p>
				<p>
					At the end of the day our main goal is to deliver happiness with each smoothie that is ordered from the website!
				</p>
				
			
	</div> <!-- End of mainContent -->
	
	<div id="footer-spacer3"></div> 
	<div id="footer">
			<p>Copyright &copy; 2017 The Igloo. All rights reserved.</p>
	</div> <!-- End of footer -->
	
</body>
</html> 