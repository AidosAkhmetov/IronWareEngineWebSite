<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from customers where customers = '$user_name'";
			$result = pg_query($con, $query);

			if($result)
			{
				if($result && pg_num_rows($result) > 0)
				{

					$user_data = pg_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	*{
		background: white;
	}
	#text{
		color:black;
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
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Login</div>
			<div class="form">
				<input id="text" type="text" name="user_name" placeholder="Name"><br><br>
			</div>
			<div class="form">
				<input id="text" type="password" name="password" placeholder="Password"><br><br>
			</div>	

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>