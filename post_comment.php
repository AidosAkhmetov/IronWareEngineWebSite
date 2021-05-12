<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ironware";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

$name=$_POST["name"];
$comments=$_POST["comments"];
$comments_length=strlen($comments);
if($comments_length>500){
	header("location:community.php?error=1");
}
else{
	mysql_query("insert into commments values('','$name','$comments')");
	header("location:community.php");
}