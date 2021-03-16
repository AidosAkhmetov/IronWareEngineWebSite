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
  <link rel="stylesheet" href="css/askquestion.css">
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
  <form action="insert_question.php" class="main">
    <br>
  <label for="title">Title:</label><br>

  <input type="text" id="title" name="title"><br><br>
  
  <label for="lname">Question</label><br>
  
  <input type="text" id="question" name="question"><br><br>
  

<div class="forma">
<p> code:</p>

<form>
  <textarea placeholder="some text..."></textarea>
</form>
</div>
<br>
<input id="submit" type="submit" value="Submit">
</form>

<style>
.forma{
  text-align: center;
} 
textarea {
  width: 30%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>

</body>
</html>