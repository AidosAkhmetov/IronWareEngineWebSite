<?php
  if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
  } else {
    header('Location: sub.php');
  }
?>
<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Thank You</title>
</head>
<body>
<ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="doc.php">Documentation</a></li>
  <li><a href="community.php">Community</a></li>
  <li><a href="download.php">Download</a></li>
  <li  class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="#">Settings</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Logout</a>

      </div>
      </li>
</ul>
  <div class="container mt-4">
    <h2>Thank you for purchasing <?php echo $product; ?></h2>
    <hr>
    <p>Your transaction ID is <?php echo $tid; ?></p>
    <p>Check your email for more info</p>
    <a href="launcher.exe" download rel="noopener noreferrer" target="_blank">
   Download
</a>
    <p><a href="index.php" class="btn btn-light mt-2">Go Back</a></p>
  </div>

  <style type="text/css">
    *{
  margin:0;
  padding: 0;

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
li .dropdown {
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