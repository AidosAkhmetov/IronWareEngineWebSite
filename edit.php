<?php
 session_start();
     include("connection.php");
     include("functions.php");

	$user_data = check_login($con);

  else{
    $update = "update user_data set user_name="""
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
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
  

  <div class="wrapper">
           <?php 
           # $q = mysql_query($db,"SELECT * FROM users where user_name='$_SESSION[login_user]' ;");
           ?>
           <div class="form">
              <div class="title" style="text-align: center;">Edit Profile</div>
         
            
            <div class="inputfield">
            <label for="fname">First name:</label>
            <input  class="input"  value="<?php
              echo $user_data['user_name']; 
              ?>">
            </input><br>
          </div>

            <div class="inputfield">
            <label  for="lname">Last name:</label>
            <input  class="input"   value="<?php echo $user_data['last_name']; ?>">
            </input><br><hr>
          </div>

            <div class="inputfield">
            <label  for="email">Email:</label>
            <input  class="input"  value="<?php echo $user_data['email']; ?>">
            </input><br><hr>
            </div>  
      </div>	
  </div>
  <div class="but">
  <a href="profile.php" id="back">Back</a><a href="#">Updata</a>
</div>
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
  .but{
    text-align: center;
  }
  #back{
    margin-right: 30px;
  }
</style>
</body>
</html>