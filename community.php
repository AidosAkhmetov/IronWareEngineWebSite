<?php 
session_start();

  include("connection.php");
  include("functions.php");
  include_once('config/config.php');
  $user_data = check_login($con);  
  $dbObj = new Database();
  if(isset($_POST['action']) && $_POST['action'] == "view") 
  {
    $output = "";
    $customers = $dbObj->displayRecord();
    echo $customers;
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Item</title>
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
<div class="card text-center" style="padding:15px;">

</div><br><br> 

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h4>Top Questions</h4>  
    </div>
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal">
      <i class="fa fa-plus"></i> Ask question</button>
  </div><br>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="table-responsive" id="tableData">
        <h3 class="text-center text-success" style="margin-top: 150px;">Loading...</h3>
      </div>
    </div>
  </div>
</div>

<!-- Add Record  Modal -->
<div class="modal" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ask a public question</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form id="formData">
          <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" class="form-control" name="title" placeholder=" " required="">
          </div>
          <div class="form-group">
            <label for="email">Body:</label>
            <input type="text" class="form-control" name="body" placeholder=" " required="">
          </div>
          <!---<div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
          </div>
          <div class="form-group">
            <label for="date">Date of birth:</label>
            <input type="date" class="form-control" name="dob" placeholder="Enter dob" required="">
          </div>
          <hr>--->
          <div class="form-group float-right">
            <button type="submit" class="btn btn-success" id="submit">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>  
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit Record  Modal -->
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="EditformData">
          <input type="hidden" name="id" id="edit-form-id">
          <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" class="form-control" disabled name="uname" id="name" placeholder="" required="" value="">
          </div>
          <div class="form-group">
            <label for="email">Body:</label>
            <input type="text" class="form-control" disabled name="uemail" id="email" placeholder="" required="">
          </div>
          <!---<div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="uusername" id="username" placeholder="Enter username" required="">
          </div>
          <div class="form-group">
            <label for="date">Date of birth:</label>
            <input type="date" class="form-control" name="udob" id="dob" placeholder="Enter dob" required="">
          </div>--->
          <hr>
          <div class="form-group float-right">
    
          </div>  
        </form>
        <form action="post_comment.php" method="POST">
        <input type="hidden" name="namecom" value="<?php echo $user_data['user_name']; ?>">
        <textarea name="comment" row="2"> 
        
        </textarea><br>
        <input type="submit" value="Comment">
      </form> 
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
  $(document).ready(function(){
  showAllCustomer();
  //View Record
  function showAllCustomer(){
    $.ajax({
      url : "action.php",
      type: "POST",
      data : {action:"view"},
      success:function(response){
          $("#tableData").html(response);
          $("table").DataTable({
            order:[0, 'DESC']
          });
        }
      });
    }

    //insert ajax request data
    $("#submit").click(function(e){
        if ($("#formData")[0].checkValidity()) {
          e.preventDefault();
          $.ajax({
            url : "action.php",
            type : "POST",
            data : $("#formData").serialize()+"&action=insert",
            success:function(response){
              Swal.fire({
                icon: 'success',
                title: 'Customer added successfully',
              });
              $("#addModal").modal('hide');
              $("#formData")[0].reset();
              showAllCustomer();
            }
          });
        }
    });

    //Edit Record
    $("body").on("click", ".editBtn", function(e){
      e.preventDefault();
      var editId = $(this).attr('id');
      $.ajax({
        url : "action.php",
        type : "POST",
        data : {editId:editId},
        success:function(response){
          var data = JSON.parse(response);
          $("#edit-form-id").val(data.id);
          $("#title").val(data.name);
          $("#body").val(data.email);
          }
      });
    });
  }); 
</script>



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

</style>
</body>
</html>