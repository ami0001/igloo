<?php
	require "../config.php";

	if (isset($_POST["crypto14"]))
	{
		$user = $_SESSION['username'];			
		$crypto14 = $_POST["crypto14"];
		$query = mysqli_query($con,"SELECT * FROM answers WHERE crypto14 = '$crypto14'") or die("Can not query DB.");
		$result = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and crypto14status = 'yes'") or die("Can not query DB.");
      	$count = mysqli_num_rows($query);
		$switch = mysqli_num_rows($result);
		
		if ($count != 1){
         		echo "<p>Wrong flag. Try again!</p>";
      	}
		elseif($switch == 1){
			echo "<p>Correct, but you have already solved this one.</p>";
			mysqli_query($con,"UPDATE Answers SET Crypto14Solves = (Crypto14Solves + 0) WHERE Crypto14 = '$crypto14'");
		}
		else{
         		//YES WE FOUND A MATCH!
			echo "<p>Correct! Points awarded.</p>";
			mysqli_query($con,"UPDATE Members SET Crypto14Status = 'yes' WHERE Username = '$user'");
			mysqli_query($con,"UPDATE Answers SET Crypto14Solves = (Crypto14Solves + 1) WHERE Crypto14 = '$crypto14'");
		}
	}
?>
