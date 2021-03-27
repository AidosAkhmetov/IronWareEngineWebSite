<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
       
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($last_name) && !empty($email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into user_data (user_id,user_name,last_name,email,password) values ('$user_id','$user_name','$last_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
*{
		background: black;
	}
	#text{
		color:white;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
        border-radius: 16px;
		padding: 10px;
		width: 70px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		margin: auto;
		width: 300px;
		padding: 20px;
	}	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Name"><br><br>
			<input id="text" type="text" name="last_name" placeholder="Last name"><br><br>
			<input id="text" type="text" name="email" placeholder="Email"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>