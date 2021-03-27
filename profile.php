<?php
 session_start();
     include("connection.php");
     include("functions.php");

	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/profile.css ">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<ul>
  		<li><a href="index.php">Home</a></li>
  		<li><a href="#news">News</a></li>
  		<li><a href="documentation.php">Documentation</a></li>
  		<li><a href="community.php">Community</a></li>
  		<li class="dropdown" style="float:right">
    	
    	<a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    	<div class="dropdown-content">
      		<a href="profile.php">Profile</a>
      		<a href="#">Settings</a>
      		<a href="logout.php">Logout</a>

    	</div>
  		</li>
  		<li style="float: right"><a  id="download" href="#">Download</a></li>
  		
	</ul>	

	<div class="container">
		<form action="" method="post">
			<button class="btn btn-default" style="float:right; width: 70px; background-color: white;" name="edit">
			  Edit	
			</button>
	    </form>
	    <div class="wrapper">
           <?php 
           # $q = mysql_query($db,"SELECT * FROM users where user_name='$_SESSION[login_user]' ;");
           ?>
           <div class="form">
           		<div class="title" style="text-align: center;">My Profile</div>
	       
	       		
		        <div class="inputfield">
		        <label for="fname">First name:</label>
	       		<input  class="input" value="<?php
	    	   	  echo $user_data['user_name']; 
	       			?>">
	       		</input><br>
   				</div>

	       		<div class="inputfield">
	       		<label  for="lname">Last name:</label>
	       		<input  class="input" value="<?php echo $user_data['last_name']; ?>">
	       		</input><br><hr>
	   			</div>

	       		<div class="inputfield">
	       		<label  for="email">Email:</label>
	       		<input  class="input" value="<?php echo $user_data['email']; ?>">
	       		</input><br><hr>
	       		</div>  
	    </div>
	</div>

</body>
</html>