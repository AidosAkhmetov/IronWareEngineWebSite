<?php
 session_start();
     include("connection.php");
     include("functions.php");
     require_once('models/Transaction.php');

	 $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/profile.css ">
 <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
      <ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="doc.php">Documentation</a></li>
  <li><a href="items.php">Community</a></li>
  <li><a href="download.php">Download</a></li>
  <li  class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="myquestion.php">My Question</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Logout</a>

      </div>
      </li>
</ul>  
	<div class="container">
		
	    <div class="wrapper" style="border-radius: 10px;">
           <?php 
           # $q = mysql_query($db,"SELECT * FROM users where user_name='$_SESSION[login_user]' ;");
           ?>
           <div class="form">
           		<div class="title" style="text-align: center;">My Profile</div>
	       
	       		
		        <div class="inputfield">
		        <label for="fname">First name:</label>
	       		<input  class="input" disabled value="<?php
	    	   	  echo $user_data['user_name']; 
	       			?>">
	       		</input><br>
   				</div>

	       		<div class="inputfield">
	       		<label  for="lname">Last name:</label>
	       		<input  class="input"  disabled value="<?php echo $user_data['last_name']; ?>">
	       		</input><br><hr>
	   			</div>
            <div class="inputfield">
            <label  for="age">Age:</label>
            <input  class="input" disabled value="<?php echo $user_data['age']; ?>">
            </input><br><hr>
            </div>
            
	       		<div class="inputfield">
	       		<label  for="email">Email:</label>
	       		<input  class="input" disabled value="<?php echo $user_data['email']; ?>">
	       		</input><br><hr>
	       		</div>
	       		<div class="inputfield">
	       		<label for="ps">Password</label>
	       		<input class="input" type="password" disabled value="<?php echo $user_data['password']?>">
	       		<br><hr>
	       		</div>
		
	       		

	       		<a style="text-decoration: none;" href="changeps.php">Change Password</a> 
	         <form action="" method="post">
      <a href="edit.php" style="text-decoration: none;float:right; width: 70px; background-color: white;" name="edit">
        Edit  
      </a>
      </form>
      </div>
	</div>
<style type="text/css">
  body{
    margin:0;
    padding:0;
  }
	.nav{
  font-size: 16px;
    font-weight: bold;
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
    background-color: black;

}
.nav li{
    display:inline;
}
.nav a{
    display:inline-block;
    padding:20px;
    text-decoration: none;
    color:white;
    background-color: black;
}
.nav a:hover{
  background-color: #593a3a;
}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}


.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</body>
</html>