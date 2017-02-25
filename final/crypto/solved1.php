<?php
	require "../config.php";

	if (isset($_POST["crypto1"]))
	{
		$user = $_SESSION['username'];			
		$crypto1 = $_POST["crypto1"];
		$query = mysqli_query($con,"SELECT * FROM answers WHERE crypto1 = '$crypto1'") or die("Can not query DB.");
		$result = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and crypto1status = 'yes'") or die("Can not query DB.");
      	$count = mysqli_num_rows($query);
		$switch = mysqli_num_rows($result);
		
		if ($count != 1){
         		echo "<p>Wrong flag. Try again!</p>";
      	}
		elseif($switch == 1){
			echo "<p>Correct, but you have already solved this one.</p>";
			mysqli_query($con,"UPDATE Answers SET Crypto1Solves = (Crypto1Solves + 0) WHERE Crypto1 = '$crypto1'");
		}
		else{
         		//YES WE FOUND A MATCH!
			echo "<p>Correct! Points awarded.</p>";
			mysqli_query($con,"UPDATE Members SET Crypto1Status = 'yes' WHERE Username = '$user'");
			mysqli_query($con,"UPDATE Answers SET Crypto1Solves = (Crypto1Solves + 1) WHERE Crypto1 = '$crypto1'");
		}
	}
?>
