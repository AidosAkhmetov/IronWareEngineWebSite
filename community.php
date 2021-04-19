<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
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




<style type="text/css">
  *{
  margin:0;
  padding: 0;

}
.nav{
  font-size: 16px;
    font-weight: bold;
    border:1px solid #ccc;
    border-width:1px 0;
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