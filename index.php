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
<<<<<<< HEAD
  		<li style="float: right"><a href="test.exe" download="test" id="download">Download</a></li>
  		
	</ul>	

  <!---<div class="slider">
=======
  		<!--<li style="float: right"><a  id="download" href="#">Download</a></li-->
  		<li style="float: right"><a href="test.exe" download="test" id="download">Download</a></li>
	</ul>	

  
<script>
>>>>>>> temp

	var images = ['img/a.jpg', 'img/b.jpg', 'img/c.jpg', 'img/d.jpg', 'img/e.jpg'];

<<<<<<< HEAD
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
=======
>>>>>>> temp
    var x = 0;

    var imgs = document.getElementById('img');

    setInterval(slider, 3000);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";
    }
</script>

<div class="slider">

    <div id="img">
      <img src="img/fifa.jpg">
    </div>

</div>




<section>
        <div class="contact">
            <div class="grid">
               
                <div class="right">
                   
                    <h1>Yernar Aldabergenov</h1>
                    <h3>Graphics Programmer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ea aperiam dicta minima dolores excepturi porro modi ad ut animi saepe, libero corrupti omnis unde earum iste voluptates veritatis voluptatibus!</p>
                    
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="grid">
              
                <div class="right">
                   
                    <h1>Yerdaulet Nurlan</h1>
                    <h3>Java Programmer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ea aperiam dicta minima dolores excepturi porro modi ad ut animi saepe, </p>
                    
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="grid">
                
                <div class="right">
                   
                    <h1>Aidos Akhmetov</h1>
                    <h3>Python and Web </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ea aperiam dicta minima dolores excepturi porro modi ad ut animi saepe asdasdasd</p>
                    
                </div>
            </div>
        </div>
    </section>


</body>
</html>