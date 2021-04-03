<?php
 session_start();
     include("connection.php");
     include("functions.php");

	$user_data = check_login($con);
	
?>
<html>
<head>
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
	<?php
	include_once('connection.php'); 
	if(isset($_POST['Submit'])){
		$email = $_POST['useremail'];
		$opwd=$_POST['opwd'];
		$npwd=$_POST['npwd'];
		$cpwd=$_POST['cpwd'];
        
        $sql=mysqli_query($con,"SELECT password FROM user_data where password='$opwd' && email='$email'");
		$num=mysqli_fetch_array($sql);
		if($num>0){
		$con=mysqli_query($con,"update user_data set password='$npwd' where email='$email'");

		$_SESSION['msg1']="Password Change Successfully";
		}
	else{
		$_SESSION['msg1']="Password does not match";
	}
	}
	?>
	<a href="profile.php">bACK</a>
    <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
    <!--<p style="color: white;"><?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1'] =""; ?></p>--->
	<form name="chngpwd" action="" method="post" onSubmit="return valid();">
		<h3>Change Password</h3>
		<div class="inputfield">
            <label  for="email">Email:</label>
            <input  class="input" name="useremail" id="useremail">
            </input><br><hr>
            </div>  
		<div class="inputfield">
		        <label for="fname">Old Password:</label>
	       		<input  class="input" type="password" name="opwd" id="opwd">
	       		</input><br><hr>
   				</div>
   		<div class="inputfield">
		        <label for="fname">New Password:</label>
	       		<input  class="input" type="password" name="npwd" id="npwd">
	       		</input><br><hr>
   				</div>
   		<div class="inputfield">
		        <label for="fname">Confirm Password:</label>
	       		<input  class="input" type="password" name="cpwd" id="cpwd">
	       		</input><br><hr>
   				</div>
   				<a href="profile.php">Back Profile</a>
   				<input type="submit" name="Submit" value="Change Password" />
   	</form>

  <style type="text/css">
   
  	form{
  		margin-top: 50px;
  		padding-top: 80px;
  		text-align: center;
  		margin-left: 450px;
  		background-color: white;
  		width: 500px;
  		height: 300px;
  	}
  </style>

 <script >
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
   </body>
   </html>