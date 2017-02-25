<?php
session_start();
require "config.php"; //Connection Script, include in every file!

//Check to see if the user is logged in.
if(isset($_SESSION['username'])){
   header("location: index.php"); //isset check to see if a variables has been 'set'
}

if(isset($_POST['submit']))
{
   //Variables from the table
   $user  = $_POST['user'];
   $pass  = $_POST['pass'];
      
   //Prevent MySQL Injections
   $user  = stripslashes($user);
   $pass  = stripslashes($pass);
   
   $user  = mysqli_real_escape_string($con, $user);
   $pass  = mysqli_real_escape_string($con, $pass);
   
   //Check to see if the user left any space empty!
   if($user == "" || $pass == "")
   {
      echo "Please fill in all the information!";
   }
   
   //Check to see if the username AND password MATCHES the username AND password in the DB
   else
   {
      $query = mysqli_query($con,"SELECT * FROM members WHERE username = '$user' and password = '$pass'") or die("Can not query DB.");
      $count = mysqli_num_rows($query);
      
      if($count == 1){
         //YES WE FOUND A MATCH!
         $_SESSION['username'] = $user; //Create a session for the user!
         header ("location: index.php");
      }
      
      else{
         echo "Username and Password DO NOT MATCH! TRY AGAIN!";
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
<form name="register" method="post" action="login.php">
<td>

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

<tr>
<td colspan="3"><strong><center>Login </center></strong></td>
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
<td></td>
<td></td>
<td><input type="submit" name="submit" value="Login"> | <a href="register.php">Register</a>
</td>
</tr>

</table>
</td>
</form>
</tr>
</table>
</body>
</html> 