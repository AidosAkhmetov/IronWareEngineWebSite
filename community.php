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
  <link rel="stylesheet" href="css/community.css">
	
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
      		<a href="#">Profile</a>
      		<a href="#">Settings</a>
      		<a href="logout.php">Logout</a>

    	</div>
  		</li>
  		<li style="float: right"><a  id="download" href="#">Download</a></li>
  		
	</ul>	

 

<div class="clearfix">
  <div class="box">
  <b>ADVERTISING</b>
  </div>
  
  <div class="box">

  <a href="#">How to use functions</a>
   
  </div>
  
  <div class="box">
    <div class="ask">
      <a href="askquestion.php" class="ask-btn">Ask question</a>
    </div> 
  </div>
</div>

<div class="content">
  <p><button id="add">Add Content</button></p>
  <div class="push"></div>
</div>

<footer class="footer">
  Footer 
</footer>
 <style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.33%;
  padding: 50px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.content {
  padding: 20px;
  min-height: 100%;
  margin: 0 auto -50px;
}
.footer,
.push {
  height: 50px;
}
</style>     

<script>
   $("#add").on("click", function() {
  $("<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>").appendTo(".content-inside");
   }); 
  </script>
  
</body>
</html>