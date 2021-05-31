<?php
include("database connection.php");
include("function.php");
$query='';
$output= array();
$query.='select * from questionss';
if(isset($_POST['search']['value'])){
	$query.='where title like "%'.$_POST["search"]["value"].'%"';
	$query.='where body like "%'.$_POST["search"]["value"].'%"';
}
if(isset($_POST["order"])){
	$query.='order by '.$_POST['order']['0']['cloumn'].' '.$_POST['order']['0']['dir'.'';
}
else{
	$query.='order by id ASC ';
}
if($_POST["length"]!=-1){
   $query .='limit ' .$_POST['start']. ', '.$_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result=$statement->fetchAll();
$data = array();
$filtered_rows=$statement->rowCount();
foreach ($result as $row) {
   $sub_array = array();
   $sub_array[]=$row['id'];
   $sub_array[]=$row['title'];
   $sub_array[]=$row['body'];
   $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-primary btn-sm update">Edit</button>';
   $sub_array[]='<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-sm update">Delete</button>';
   $data[]=$sub_array;
}
$output=array(
"draw" =>intval($_POST["draw"]),
"recordsTotal" =>$filtered_rows,
"recodsFiltered"=>get_total_all_records(),
"data"=>$data
);
echo json_encode($output);
?>
