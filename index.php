<?php session_start(); ob_start(); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;  	charset=UTF-8" />
	<link rel="icon" href="images/favicon.ico" type="favicon/ico" />
	<title>The Igloo</title>
	<link href="style.css" rel=stylesheet type="text/css" />
</head>
<body>
	<div id="container">
	
		<div id="header">
			<h1>Welcome to the Igloo</h1>
		</div> <!-- End of header -->
		<?php
			require "check.php";
		?>
		<!-- Creating some space before we demonstrate the slide show -->
		<div id="heightSpace1"></div>
		
		<div id="mainContent">
		
			<!-- Attempting to include a picture for the home page -->
			<center>
				<!-- <img src="images/iglooPic3.jpg" alt="header" title="header" style="width: 90%;"> -->
				<!-- this is going to present the slideshow on the main page -->
				<!-- details about the slide show are provide in the css style sheet -->
				<div class="simple-ss" id="simple-ss"></div>
			</center>
				
			<div id="div_top_hypers">
				<ul id="ul_top_hypers">
					<center>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<li> <a href=custom.php><img src="images/buttons/custom.png" alt="Custom Page" title="Custom Page"></a></li>
						<!-- <li><input type="image" src="images/buttons/custom.png" /> </li> -->
						<!-- <li> <a href =about.php>About</a></li> -->
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<li> <a href=special.php><img src="images/buttons/specialty.png" alt="Specialty Page" title="Specialty Page"></a></li>
						<!-- <li><input type="image" src="images/buttons/specialty.png" /> </li> -->
						<!-- <li> <a href =menu.php>Menu</a></li> -->
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						
					</center>
				</ul>
			</div>	<!-- end of div_top_hypers -->
		</div> <!-- End of mainContent -->
		
				
		<!-- Footer spacer is going to create some speace in the container between the slide show and footer -->		
		<div id="footer-spacer"></div> 		
				
		<div id="footer">
			<p>Copyright &copy; 2017 The Igloo. All rights reserved.</p>
		</div> <!-- End of footer -->
	
	</div> <!-- End of the Container -->
</body>
</html>