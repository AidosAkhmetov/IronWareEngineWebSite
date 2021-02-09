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
  		<li style="float: right"><a href="test.exe" download="test" id="download">Download</a></li>
  		
	</ul>	

  <!---<div class="slider">

    <div id="img">
      <img src="img/maxresdefault.jpg">
    </div>

  </div>
  -->

 <footer>
        <div class="container">
            <div class="footer-content">
                <div class="items">
                    <a href="#" class="logo">Skrapp.io</a>  
                    <p> Skrapp.io is an Email Finder for B2B sales and email marketing. We are collecting and crafting public data to provide an
                    advanced prospecting tool to help professionals launch performant email outreach campaigns.</p>
                    <div class="social">
                        <a href="#" class="fo"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="fo"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="fo"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="fo"><i class="fa fa-github"></i></a>
                    </div>
                </div>
                <div class="items">
                    <h3> Product</h3>
                    <ul>
                        <li class="lim"><a class="fo" href="#">Chrome Extension</a></li>
                        <li class="lim"><a  class="fo" href="#">Email Finder</a></li>
                        <li class="lim"><a  class="fo" href="#">Bulk Email Finder</a></li>
                        <li class="lim"><a class="fo" href="#">Companies</a></li>
                        <li class="lim"><a class="fo" href="#">Index</a></li>
                        <li class="lim"><a class="fo" href="#">API</a></li>
                        <li class="lim"><a class="fo" href="#">Pricing</a></li>
                    </ul>                          
                </div>

                <div class="items">
                    <h3>Legal</h3>
                <ul>
                    <li class="lim"><a href="#">Terms</a></li>
                    <li class="lim"><a href="#">Privacy Policy</a></li>
                    <li class="lim"><a href="#">Cookie Policy</a></li>
                    <li class="lim"><a href="#">GDPR Compliance</a></li>
                </ul>
                </div>
                <div class="items">
                    <h3>Support</h3>
                    <ul>
                        <li class="lim"><a href="#">Knowledge Base</a></li>
                        <li class="lim"><a href="#">Video Tutorials</a></li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="end">Copyright © 2020 by Skrapp.io. All rights reserved.</p>
        </div>
    </footer>
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