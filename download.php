<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<html>
<head>
 <title>Info Sub</title>
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <!--<link rel="stylesheet" href="css/style.css">-->

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


<div class="container">
    <div class="card">
    
      <h4>Month</h4>
      <h5>$3.99</h5>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat commodi ad excepturi id expedita cupiditate repellendus possimus unde culpa! Eius.</p>
      <a  href="sub2.php" style="background-color: blue;color: white;">Download month</a>
    </div>

    <div class="card">
  
      <h4>3-Month</h4>
      <h5>$9.99</h5>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat commodi ad excepturi id expedita cupiditate repellendus possimus unde culpa! Eius.</p>
      <a  href="sub.php" style="background-color: blue;color:white;">Download 3-month</a>
    </div>
    
    <div class="card">
    
      <h4>Year</h4>
      <h5>$29.99</h5>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat commodi ad excepturi id expedita cupiditate repellendus possimus unde culpa! Eius.</p>
      <a  href="sub3.php" style="background-color: blue;color:white;">Download year</a>
      </div>
    
  </div>

  <br>
  <!---<div id="link">
   <a id="downl" href="sub.php">Download</a>
  </div>
  <br>--->
<style type="text/css">
*{
  margin:0;
  padding: 0;
  background: #e0e5ec;

}
  .nav{
    font-size: 16px;
    font-weight: bold;

    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
    overflow: hidden;
    background-color: black;
}
.nav li{
    display:inline;
    background-color: black;
}
.nav a {
    color:white;
    display:inline-block;
    padding:20px;
    text-decoration: none;
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
.container{
  margin-top: 100px;
  margin-left: 100px;
  background: #e0e5ec;
  position: relative;
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
  width: 1150px;
}
.card{
  width: 250px;
  height: 280px;
  padding: 40px 30px;
  margin: 10px;
  border-radius: 1rem;
  box-shadow: 9px 9px 16px rgba(163,177,198,.6),
        -9px -9px 16px rgba(255,255,255,.5);

}
.imgBox{
  width: 120px;
  height: 120px;
  border: 1px solid #eaeff5;
  margin: 0 auto;
  border-radius: 100px;
  overflow: hidden;
  box-shadow: 9px 9px 16px rgba(163,177,198,.6),
        -9px -9px 16px rgba(255,255,255,.5);

}
#link
{
  margin-left: 600px;
  text-align: center;
}
#downl{
  width: 100px;
  display: block;
  padding: 1rem;
  text-align: center;
  text-decoration: none;
  color: white;
  background-color: blue;
  margin: 10px 0;
  font-size: 1rem;
  font-weight: bold;
  box-shadow: 9px 9px 16px rgba(163,177,198,.6),
        -9px -9px 16px rgba(255,255,255,.5);
  border-radius: 100px;
}
.imgBox img{
  width: inherit;
  height: inherit;
}
h4{
  padding: 10px;
  text-transform: uppercase;
  text-align: center;
  font-size: 1.5rem;
  font-weight: bold;
}
h5{
  text-align: center;
  color: #9b9b9b;
  font-weight: bold;
  letter-spacing: 1px;
  font-size: 1rem;
}
p{
  color: #696969;
  font-size: 1rem;
  font-weight: bold;
  padding: 10px 0;
  line-height: 1.5rem;
}
.card a{
  display: block;
  padding: 1rem;
  text-align: center;
  text-decoration: none;
  color: #000;
  margin: 10px 0;
  font-size: 1rem;
  font-weight: bold;
  box-shadow: 9px 9px 16px rgba(163,177,198,.6),
        -9px -9px 16px rgba(255,255,255,.5);
  border-radius: 100px;
}
.card a:hover{
  box-shadow:inset 9px 9px 16px rgba(163,177,198,.6),
      inset -9px -9px 16px rgba(255,255,255,.5),
        9px 9px 16px rgba(163,177,198,.6),
        -9px -9px 16px rgba(255,255,255,.5);
}
</style>
</body>
</html>