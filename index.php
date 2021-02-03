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
	<link rel="stylesheet" href="css/style.css ">
	<script src="js/index.js"></script>
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

  <div class="slider">

    <div id="img">
      <img src="img/maxresdefault.jpg">
    </div>

  </div>
  
<script type="text/javascript">
	var images = ['img/far.jpg','img/fifa.jpg'];
    var x = 0;
    var imgs = document.getElementById('img');
    setInterval(slider, 4000);
    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }
      imgs.innerHTML = "<img src=" + images[x - 1] + ">";


    }
</script>
</body>
</html>