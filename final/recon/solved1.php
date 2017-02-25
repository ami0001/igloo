<?php
	require "../config.php";

	if (isset($_POST["recon1"]))
	{
		$user = $_SESSION['username'];			
		$recon1 = $_POST["recon1"];
		$query = mysqli_query($con,"SELECT * FROM answers WHERE recon1 = '$recon1'") or die("Can not query DB.");
		$result = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and recon1status = 'yes'") or die("Can not query DB.");
      	$count = mysqli_num_rows($query);
		$switch = mysqli_num_rows($result);
		
		if ($count != 1){
         		echo "<p>Wrong flag. Try again!</p>";
      	}
		elseif($switch == 1){
			echo "<p>Correct, but you have already solved this one.</p>";
			mysqli_query($con,"UPDATE Answers SET Recon1Solves = (Recon1Solves + 0) WHERE Recon1 = '$recon1'");
		}
		else{
         		//YES WE FOUND A MATCH!
			echo "<p>Correct! Points awarded.</p>";
			mysqli_query($con,"UPDATE Members SET Recon1Status = 'yes' WHERE Username = '$user'");
			mysqli_query($con,"UPDATE Answers SET Recon1Solves = (recon1Solves + 1) WHERE Recon1 = '$recon1'");
		}
	}
?>
