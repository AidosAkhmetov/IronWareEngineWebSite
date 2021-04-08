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
