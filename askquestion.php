<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'ironware');
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $update = false;
    $title = $_POST['title'];
    $question = $_POST['question'];
    $code = $_POST['code'];
    $user = $user_data['user_name'];
     
    if(!empty($title) && !empty($question) && !is_numeric($title) && !empty($code))
    {    
      $query_ask = "insert into questions (title,question,code) values ('$title','$question','$code')";
      mysqli_query($con, $query_ask);
      header("Location: community.php");
      die;
    }
    else{
      echo "Please enter some valid information!";
    }

  }
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ask Question</title>
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
      		<a href="profile.php">Profile</a>
      		<a href="#">Settings</a>
      		<a href="logout.php">Logout</a>

    	</div>
  		</li>
  		<li style="float: right"><a  id="download" href="#">Download</a></li>

	</ul>
  
  <form method="post" action="community.php" >
    <div class="input-group">
      <label>Title</label>
      <input type="text" name="name" value="">
    </div>
    <div class="input-group">
      <label>Question</label>
      <input type="text" name="address" value="">
    </div>
   
      <div class="input-group">
        <label>Code</label>
      <textarea placeholder="some text..."></textarea>
      </div>
     <div class="input-group">
      <button class="btn" type="submit" name="save" >Save</button>
    </div>
  </form>

<style>
form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
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