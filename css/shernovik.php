
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Customer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="EditformData">
          <input type="hidden" name="id" id="edit-form-id">
          <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" class="form-control" name="uname" id="name" placeholder="" required="">
          </div>
          <div class="form-group">
            <label for="email">Body:</label>
            <input type="text" class="form-control" name="uemail" id="email" placeholder="" required="">
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
            <button type="submit" class="btn btn-primary" id="update">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>  
        </form>
      </div>
    </div>
  </div>
</div>

<td>
                    <a href='#editModal' style='color:green' data-toggle='modal' 
                    class='editBtn' id='".$customer['id']."'><i class='fa fa-pencil'></i></a>&nbsp;
                    <a href='' style='color:red' class='deleteBtn' id='".$customer['id']."'>
                    <i class='fa fa-trash' ></i></a>
                  </td>






<script type="text/javascript">
  var images = ['img/fifa.jpg','img/fifa.jpg'];
    var x = 0;

    var imgs = document.getElementById('img');

    setInterval(slider, 3000);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";
    }
</script>

<div class="slider">

    <div id="img">
      <img src="img/far.jpg">
    </div>

</div>





$sql = "select * from transaction";
  if($result = mysqli_query($con, $sql))
  {
    if(mysqli_num_rows($result) > 0){
       echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['product'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['currency'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
}
    }
?>














li {
  float: left;
}
style="float:right"
<?php
require_once("community.php");
?> 
position: absolute;	
.nav li {
  float: left;
}
list-style-type: none;


<li><a href="index.php">Home</a></li>
  		<li><a href="#news">News</a></li>
  		<li><a href="documentation.php">Documentation</a></li>
  		<li><a href="community.php">Community</a></li>
  		
  		
  		<li><a href="launcher.exe" download="launcher" id="download">Download</a></li>
  		<li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
      <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="#">Settings</a>
          <a href="logout.php">Logout</a>
      </div>
      </li>


ul {
  position:absolute;
  left:50%;top:0;
  margin-left:-375px; /* negative margin equal to half the width */
  width:750px;
  font-weight: bold;
  list-style: none;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
  text-align: center;
}

.nav li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin-right: 20px;
}
#download:hover{
  background-color: #593a3a;
}
