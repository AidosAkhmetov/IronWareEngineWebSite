<?php
	// Include config.php file
	include_once('config/config.php');

	$dbObj = new Database();

	// Insert Record	
	if (isset($_POST['action']) && $_POST['action'] == "insert") {

		$title = $_POST['title'];
		$body = $_POST['body'];
		$dbObj->insertRecond($title, $body);
	}

	// View record
	if (isset($_POST['action']) && $_POST['action'] == "view") {
		$output = "";

		$customers = $dbObj->displayRecord();

		if ($dbObj->totalRowCount() > 0) {
			$output .="<table class='table table-striped table-hover'>
			        <thead>
			          <tr>
			         
			            <th>Title</th>
			            </tr>
			        </thead>
			        <tbody>";
			foreach ($customers as $customer) {
			$output.="<tr>
			            <td><a href='#editModal' style='color:green' data-toggle='modal' 
			              class='editBtn' id='".$customer['id']."'>".$customer['title']."</a>&nbsp;</td>
			            </tr>";
				}
			$output .= "</tbody>
      		</table>";
      		echo $output;	
		}else{
			echo '<h3 class="text-center mt-5">No records found</h3>';
		}
	}

	// Edit Record	
	if (isset($_POST['editId'])) {
		$editId = $_POST['editId'];
		$row = $dbObj->getRecordById($editId);
		echo json_encode($row);
	}

?>