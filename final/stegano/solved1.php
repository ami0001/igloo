<?php
	require "../config.php";

	if (isset($_POST["stegano1"]))
	{
		$user = $_SESSION['username'];			
		$stegano1 = $_POST["stegano1"];
		$query = mysqli_query($con,"SELECT * FROM answers WHERE stegano1 = '$stegano1'") or die("Can not query DB.");
		$result = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and stegano1status = 'yes'") or die("Can not query DB.");
      	$count = mysqli_num_rows($query);
		$switch = mysqli_num_rows($result);
		
		if ($count != 1){
         		echo "<p>Wrong flag. Try again!</p>";
      	}
		elseif($switch == 1){
			echo "<p>Correct, but you have already solved this one.</p>";
			mysqli_query($con,"UPDATE Answers SET Stegano1Solves = (Stegano1Solves + 0) WHERE Stegano1 = '$stegano1'");
		}
		else{
         		//YES WE FOUND A MATCH!
			echo "<p>Correct! Points awarded.</p>";
			mysqli_query($con,"UPDATE Members SET Stegano1Status = 'yes' WHERE Username = '$user'");
			mysqli_query($con,"UPDATE Answers SET Stegano1Solves = (Stegano1Solves + 1) WHERE Stegano1 = '$stegano1'");
		}
	}
?>
