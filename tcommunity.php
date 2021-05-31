<!DOCTYPE html>
<html>
<head>
	<title>Community</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<style type="text/css">
	.content{
		max-width:800px;
		margin: auto;

	}
	h1{
		text-align: center;
		padding-bottom: 60px;

	}
</style>

</head>
<body>
	<div class="content">
	<h1>Top Questions</h1>
	
		<table id="course_table" class="table table-striped">
			<thead bgcolor="#6cd8dc">
				<tr class="table-primary">
					<th width="30%">ID</th>
					<th width="50%">Course Name</th>
					<th width="30%">Number of Students</th>
					<th scope="col" width="5%">Edit</th>
					<th scope="col" width="5%">Delete</th>
					
				</tr>
			</thead>
		</table>
		<br>
		<div align="right">
			<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success">Ask Question</button>
		</div>
	</div>
</body>
</html>

<div id="userModal" class="modal" fade>
	<div class="modal-dialog">
		<form method="post" id="course_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					
					<h4 class="modal-title">Add course</h4>
				</div>

				<div class="modal-body">
					<label>Enter title</label>
					<input type="text" name="title" id="course" class="form-control"><br>
					<label>Enter body</label>
					<input type="text" name="body" id="students" class="form-control"><br>
				</div>

				<div class="modal-footer">
					<input type="hidden" name="course_id" id="course_id">
					<input type="hidden" name="operation" id="operation">
					<input type="submit" name="action" id="action" class="btn btn-primary" value="Add">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>



