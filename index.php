<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

    <ul class="nav">
  		<li><a href="logout.php">Logout</a></li>    
		<li><?php echo $user_data['user_name']; ?></li>
		
  		<li><a href="#">Forum</a></li>
  		<li><a href="#">Documentation</a></li>
  		
  		<li><a href="#">About Us</a></li>
  		<li><a href="#">Home</a></li>
  		
	</ul> 
	
	
	
</body>
</html>