<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/documentation.css">

<link rel = "icon" href ="icon.jpg" type = "image/x-icon">
</head>

<body>

<div class="sidenav">
  <input placeholder="search" style="margin-top: 20px; margin-left: 20px; height: 30px;">
  <a href="#">IronWare Documentation</a>
  <a href="#">Get Started with IronWare</a>
  <a href="#">Engine Features</a>
  <a href="#">Release Notes</a>
  <a href="#">Working with Content</a>
  <a href="#">Programming and Scripting</a>
</div>

<div class="content">
  <h2><b>Ironware Documentation</b></h2>
  <img src="img/LT5MN.png">
  <p></p>
</div>

</body>
</html>
