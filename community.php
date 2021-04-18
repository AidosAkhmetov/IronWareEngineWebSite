<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Community</title>
  <!--<link rel="stylesheet" href="css/style.css">--->
  <link rel="stylesheet" href="css/community.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>	
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

 
<script type="js/search.js"></script>
  



  <div class="container">
    <div class="jumbotron">
      <div class="card">
        <h2>Questions</h2>
      </div>
      <div class="card">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpage">
          Launch demo modal
        </button>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="modalpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
</style>



</body>
</html>        