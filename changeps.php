<?php
 session_start();
     include("connection.php");
     include("functions.php");

	$user_data = check_login($con);
	
?>
<html>
<head>
	<link rel="stylesheet" href="css/profile.css ">

	</head>
<body>
	<ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="documentation.php">Documentation</a></li>
  <li><a href="community.php">Community</a></li>
  <li><a href="download.php">Download</a></li>
  <li class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="#">Settings</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Logout</a>

      </div>
      </li>
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
    <p style="color:red;"><?php echo $_SESSION['msg1'];?></p>
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