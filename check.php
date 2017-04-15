<?php
	if(isset($_SESSION['email'])){
		echo "<div id=\"div_top_hypers\">
				<ul id=\"ul_top_hypers\">
					<center>
						<li> <a href=index.php><img src=\"images/buttons/home.png\" alt=\"Home Page\" title=\"Home Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=order.php><img src=\"images/buttons/order.png\" alt=\"Order Page\" title=\"Order Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=about.php><img src=\"images/buttons/about.png\" alt=\"About Page\" title=\"About Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=profile.php><img src=\"images/buttons/profile.png\" alt=\"Profile Page\" title=\"Profile Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span><br><br>
						<li id=\"check\">" . $_SESSION['email'] . " | " . "<a href='logout.php'>Logout</a>" . "</li>
					</center>
				</ul>
			</div>";
	}
	else{
		echo "<div id=\"div_top_hypers\">
				<ul id=\"ul_top_hypers\">
					<center>
						<li> <a href=index.php><img src=\"images/buttons/home.png\" alt=\"Home Page\" title=\"Home Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=order.php><img src=\"images/buttons/order.png\" alt=\"Order Page\" title=\"Order Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=about.php><img src=\"images/buttons/about.png\" alt=\"About Page\" title=\"About Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=register.php><img src=\"images/buttons/register.png\" alt=\"Register Page\" title=\"Register Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<li> <a href=login.php><img src=\"images/buttons/login.png\" alt=\"Login Page\" title=\"Login Page\"></a></li>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
						<span style=\"display:inline-block; width: YOURWIDTH;\"></span>
					</center>
				</ul>
			</div>";
	}
?>