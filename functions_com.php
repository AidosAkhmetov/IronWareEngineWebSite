<?php
function get_total_all_records(){
	include('database connection.php');
	$statement = $connection->prepare("select * from questionss");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}