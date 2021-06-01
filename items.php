<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Items</title>
  </head>
  <body>
    <ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="doc.php">Documentation</a></li>
  <li><a href="items.php">Community</a></li>
  <li><a href="download.php">Download</a></li>
  <li  class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="myquestion.php">My Questions</a>
          <a href="transaction.php">Transaction</a>
          <a href="logout.php">Logout</a>

      </div>
      </li>
</ul>

    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1> Top Questions</h1>
          <a href="com.php"><button class="btn btn-primary m-1 float-right">Ask question</button></a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th style="text-align: center;font-size: 20px;">Title</th>
                </tr>
            </thead>
            <tbody>
              <?php

                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td style="text-align: center;"><a href="read.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a> </td>
              </tr>

              <?php
                }
              }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
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
section{
    padding-left: 200px;
    height: 94vh;
    display: flex;
    align-items: center;
    background: #101010;
}
.contact{
    width: 150%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.grid{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    align-items: center;
    justify-content: center;
}

.right > *{
    margin-bottom: 1.1rem;
    color: #fff;
}
.right h4{
    font-weight: 500;
    background: var(--color);
    display: inline-block;
    padding: 5px 15px;
    font-size: 16px;
    border-radius: 4px;
}
.right h1{
    font-size: 2rem;
    font-weight: 800;
}
.right p{
    text-align: justify;
}
.btn{
    text-decoration: none;
    display: inline-block;
    padding: 10px 25px;
    border: 2px solid var(--color);
    border-radius: 5px;
    position: relative;
    z-index: 1;
}

@media (max-width:768px){
    .grid{
        grid-template-columns: 1fr;
    }
}

@import url(https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.slider {
      width: 100%;
      height: 590px;
      margin: 0px auto;
      box-sizing: border-box;
      overflow: hidden;
      box-shadow: 5px 5px 10px #101010;

    }
    img {
      width: 100%;
      height: 100%;
      animation: ani 3s linear;

    }

    @keyframes ani {
      0% {
        transform: scale(2.2);
      }
      10% {
        transform: scale(1);
      }
      100% {
        transform: scale(1);
      }
    }
</style>
</html>