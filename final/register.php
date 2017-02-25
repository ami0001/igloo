<?php
session_start();  //Must Start a session.

require "config.php"; //Connection Script, include in every file!

//Check to see if the user is logged in.
//'isset' check to see if a variables has been 'set'
if(isset($_SESSION['username'])){
   header("location: index.php");
}

//Check to see if the user click the button
if(isset($_POST['submit']))
{
   //Variables from the table
   $user  = $_POST['user'];
   $pass  = $_POST['pass'];
   $cpass = $_POST['cpass'];
   $email = $_POST['email'];
   $def = "no";
   
   //Prevent MySQL Injections
   $user  = stripslashes($user);
   $pass  = stripslashes($pass);
   $cpass = stripslashes($cpass);
   $email = stripslashes($email);
   
   $user  = mysqli_real_escape_string($con, $user);
   $pass  = mysqli_real_escape_string($con, $pass);
   $cpass = mysqli_real_escape_string($con, $cpass);
   $email = mysqli_real_escape_string($con, $email);
   
   //Check to see if the user left any space empty!
   if($user == "" || $pass == "" || $cpass == "" || $email == "")
   {
      echo "Please fill in all the information!";
   }
   
   else
   {
      //Check too see if the user's Passwords Matches!
      if($pass != $cpass)
      {
         echo "Passwords do not match! Try Again.";
      }
      
      //CHECK TO SEE IF THE USERNAME IS TAKEN, IF NOT THEN ADD USERNAME AND PASSWORD INTO THE DB
      else
      {
         //Query the DB
         $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user'") or die("Can not query the TABLE!");
         
         //Count the number of rows. If a row exist, then the username exist!
         $row = mysqli_num_rows($query);
         if($row == 1)
         {
            echo "Sorry, but the username is already taken! Try again.";
         }
         
         //ADD THE USERNAME TO THE DB
         else
         {
            $add = mysqli_query($con,"INSERT INTO members (username, password, email, crypto1status, crypto2status, crypto3status, crypto4status, crypto5status, crypto6status, crypto7status, crypto8status, crypto9status, crypto10status, crypto11status, crypto12status, crypto13status, crypto14status, crypto15status, stegano1status, stegano2status, web1status, recon1status) VALUES ('$user' , '$pass' , '$email','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def','$def') ") or die("Can't                Insert! ");
            echo "Successful! <a href='login.php'> Click Here </a> to login.";
         }        
      }      
   }
}
?>

<html>
<head>
	<title>Strawhacks</title>
</head>
<body style="background-image:url('images/login.jpg'); background-size: 100% auto; background-repeat: no-repeat;">

<table width="300" align="center" cellpadding="0" cellspacing="1" border="1px solid black">

<tr>
<form name="register" method="post" action="register.php">
<td>

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

<tr>
<td colspan="3"><strong><center>Registration</center></strong></t
d>
</tr>

<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="user" type="text" id="user"></td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td><input name="pass" type="password" id="pass"></td>
</tr>

<tr>
<td>Confirm Password</td>
<td>:</td>
<td><input name="cpass" type="password" id="cpass"></td>
</tr>

<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="text" id="email"></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" name="submit" value="Register"> | <a href="login.php">Login</a>
</td>
</tr>

</table>
</td>
</form>
</tr>
</table>
</body>
</html>