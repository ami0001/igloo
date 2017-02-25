<?php
	require "../config.php";

	if (isset($_POST["crypto12"]))
	{
		$user = $_SESSION['username'];			
		$crypto12 = $_POST["crypto12"];
		$query = mysqli_query($con,"SELECT * FROM answers WHERE crypto12 = '$crypto12'") or die("Can not query DB.");
		$result = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and crypto12status = 'yes'") or die("Can not query DB.");
      	$count = mysqli_num_rows($query);
		$switch = mysqli_num_rows($result);
		
		if ($count != 1){
         		echo "<p>Wrong flag. Try again!</p>";
      	}
		elseif($switch == 1){
			echo "<p>Correct, but you have already solved this one.</p>";
			mysqli_query($con,"UPDATE Answers SET Crypto12Solves = (Crypto12Solves + 0) WHERE Crypto12 = '$crypto12'");
		}
		else{
         		//YES WE FOUND A MATCH!
			echo "<p>Correct! Points awarded.</p>";
			mysqli_query($con,"UPDATE Members SET Crypto12Status = 'yes' WHERE Username = '$user'");
			mysqli_query($con,"UPDATE Answers SET Crypto12Solves = (Crypto12Solves + 1) WHERE Crypto12 = '$crypto12'");
		}
	}
?>
