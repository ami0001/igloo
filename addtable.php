<?php
$con=mysqli_connect("localhost","root","","alex_final");
$null=0;

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables
$profiles="CREATE TABLE Members(Username CHAR(20),Password CHAR(20),Email CHAR(20),Crypto1Status CHAR(20), Crypto2Status CHAR(20), Crypto3Status CHAR(20), Crypto4Status CHAR(20), Crypto5Status CHAR(20), Crypto6Status CHAR(20), Crypto7Status CHAR(20), Crypto8Status CHAR(20), Crypto9Status CHAR(20), Crypto10Status CHAR(20), Crypto11Status CHAR(20), Crypto12Status CHAR(20), Crypto13Status CHAR(20), Crypto14Status CHAR(20), Crypto15Status CHAR(20), Stegano1Status CHAR(20), Stegano2Status CHAR(20), Web1Status CHAR(20), Recon1Status CHAR(20))";

$sols="CREATE TABLE Answers(Crypto1 CHAR(20), Crypto2 CHAR(20), Crypto3 CHAR(20), Crypto4 CHAR(20), Crypto5 CHAR(20), Crypto6 CHAR(20), Crypto7 CHAR(20), Crypto8 CHAR(20), Crypto9 CHAR(20), Crypto10 CHAR(20), Crypto11 CHAR(20), Crypto12 CHAR(20), Crypto13 CHAR(20), Crypto14 CHAR(20), Crypto15 CHAR(20), Stegano1 CHAR(20), Stegano2 CHAR(20), Web1 CHAR(20), Recon1 CHAR(20), Crypto1Solves CHAR(20), Crypto2Solves CHAR(20), Crypto3Solves CHAR(20), Crypto4Solves CHAR(20), Crypto5Solves CHAR(20), Crypto6Solves CHAR(20), Crypto7Solves CHAR(20), Crypto8Solves CHAR(20), Crypto9Solves CHAR(20), Crypto10Solves CHAR(20), Crypto11Solves CHAR(20), Crypto12Solves CHAR(20), Crypto13Solves CHAR(20), Crypto14Solves CHAR(20), Crypto15Solves CHAR(20), Stegano1Solves CHAR(20), Stegano2Solves CHAR(20), Web1Solves CHAR(20), Recon1Solves CHAR(20))";

$crypto1="One Piece";
$crypto2="WE ARE!";
$crypto3="MonkeyDLuffy";
$crypto4="Thousand Sunny";
$crypto5="santoryu";
$crypto6="Strawhats";
$crypto7="marines";
$crypto8="Ohara";
$crypto9="CHoPPEr";
$crypto10="R0r0n04Z0r0";
$crypto11="NicoRobin";
$crypto12="MEAT";
$crypto13="GolDRoger";
$crypto14="Going Merry";
$crypto15="tacoyaci";
$stegano1="NewWorld";
$stegano2="Mugiwara";
$web1="NewWorld";
$recon1="Br00k";


$answers="INSERT INTO Answers(Crypto1, Crypto2, Crypto3, Crypto4, Crypto5, Crypto6, Crypto7, Crypto8, Crypto9, Crypto10, Crypto11, Crypto12, Crypto13, Crypto14, Crypto15, Stegano1, Stegano2, Web1, Recon1, Crypto1Solves, Crypto2Solves, Crypto3Solves, Crypto4Solves, Crypto5Solves, Crypto6Solves, Crypto7Solves, Crypto8Solves, Crypto9Solves, Crypto10Solves, Crypto11Solves, Crypto12Solves, Crypto13Solves, Crypto14Solves, Crypto15Solves, Stegano1Solves, Stegano2Solves, Web1Solves, Recon1Solves) VALUES ('$crypto1','$crypto2','$crypto3','$crypto4','$crypto5','$crypto6','$crypto7','$crypto8','$crypto9','$crypto10','$crypto11','$crypto12','$crypto13','$crypto14','$crypto15','$stegano1','$stegano2','$web1','$recon1','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null','$null')";

// Execute query
if (mysqli_query($con,$profiles)) {
  echo "Members table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 
if (mysqli_query($con,$sols)) {
  echo "Answers table created successfully."."<br>";
}
else {
  echo "Error creating table: " . mysqli_error($con) . ".<br>";
} 
if (mysqli_query($con,$answers)) {
  echo "Answers data properly inserted."."<br>";
}
else {
  echo "Error inserting data: " . mysqli_error($con) . ".<br>";
} 
