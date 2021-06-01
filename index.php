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
	<!--<link rel="stylesheet" href="css/style.css ">-->
	<script src="js/index.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
      <ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="doc.php">Documentation</a></li>
  <li><a href="items.php">Community</a></li>
  <li><a href="download.php">Download</a></li>
  <li  class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="myquestion.php">My Question</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Logout</a>

      </div>
      </li>
</ul>
 

  <!---<div class="slider">
  		<li style="float: right"><a  id="download" href="#">Download</a></li
  		<li style="float: right"><a href="launcher.exe" download="launcher" id="download">Download</a></li>
	</ul>	
-->
  



 


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
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"></h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contact us</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">email</a>
          </li>
          <li>
            <a href="#!" class="text-dark">phone</a>
          </li>
      
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
            <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="#!">IronwareWebSite</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
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
section{
    padding-left: 200px;
    height: 94vh;
    display: flex;
    align-items: center;
    background: #101010;
}
.contact{
    width: 150%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.grid{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    align-items: center;
    justify-content: center;
}

.right > *{
    margin-bottom: 1.1rem;
    color: #fff;
}
.right h4{
    font-weight: 500;
    background: var(--color);
    display: inline-block;
    padding: 5px 15px;
    font-size: 16px;
    border-radius: 4px;
}
.right h1{
    font-size: 2rem;
    font-weight: 800;
}
.right p{
    text-align: justify;
}
.btn{
    text-decoration: none;
    display: inline-block;
    padding: 10px 25px;
    border: 2px solid var(--color);
    border-radius: 5px;
    position: relative;
    z-index: 1;
}

@media (max-width:768px){
    .grid{
        grid-template-columns: 1fr;
    }
}

@import url(https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.slider {
      width: 100%;
      height: 590px;
      margin: 0px auto;
      box-sizing: border-box;
      overflow: hidden;
      box-shadow: 5px 5px 10px #101010;

    }
    img {
      width: 100%;
      height: 100%;
      animation: ani 3s linear;

    }

    @keyframes ani {
      0% {
        transform: scale(2.2);
      }
      10% {
        transform: scale(1);
      }
      100% {
        transform: scale(1);
      }
    }

</style>
</body>
</html>