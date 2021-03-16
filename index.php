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
  		<!--<li style="float: right"><a  id="download" href="#">Download</a></li-->
  		<li style="float: right"><a href="test.exe" download="test" id="download">Download</a></li>
	</ul>	

  
<script>

	var images = ['img/a.jpg', 'img/b.jpg', 'img/c.jpg', 'img/d.jpg', 'img/e.jpg'];

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