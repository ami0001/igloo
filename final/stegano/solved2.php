<?php
	require "../config.php";

	if (isset($_POST["stegano2"]))
	{
		$user = $_SESSION['username'];			
		$stegano2 = $_POST["stegano2"];
		$query = mysqli_query($con,"SELECT * FROM answers WHERE stegano2 = '$stegano2'") or die("Can not query DB.");
		$result = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and stegano2status = 'yes'") or die("Can not query DB.");
      	$count = mysqli_num_rows($query);
		$switch = mysqli_num_rows($result);
		
		if ($count != 1){
         		echo "<p>Wrong flag. Try again!</p>";
      	}
		elseif($switch == 1){
			echo "<p>Correct, but you have already solved this one.</p>";
			mysqli_query($con,"UPDATE Answers SET Stegano2Solves = (Stegano2Solves + 0) WHERE Stegano2 = '$stegano2'");
		}
		else{
         		//YES WE FOUND A MATCH!
			echo "<p>Correct! Points awarded.</p>";
			mysqli_query($con,"UPDATE Members SET Stegano2Status = 'yes' WHERE Username = '$user'");
			mysqli_query($con,"UPDATE Answers SET Stegano2Solves = (Stegano2Solves + 1) WHERE Stegano2 = '$stegano2'");
		}
	}
?>
