<?php
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Transaction.php');
  $user = 'root';
  $password = '';
  $db = 'ironware';
  $host = 'localhost';
  
  $link = mysqli_init();
  $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db
  );

  // Instantiate Transaction
  $transaction = new Transaction();

  // Get Transaction
  $transactions = $transaction->getTransactions();
?>
<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>View Transactions</title>
</head>
<body>
<ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="doc.php">Documentation</a></li>
  <li><a href="community.php">Community</a></li>
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
  


  <div class="container mt-4">
    <div class="btn-group" role="group">
      <!---<a href="transactions.php" class="btn btn-primary">Transactions</a>    <td><?php echo $t->customer_id; ?></td>
             

             -->
            </div>
    <hr>
    <h2>My Transactions</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Product</th>
          <th>Amount</th>
          <th>Date</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($transactions as $t): ?>
          <tr>
            <td><?php echo $t->product; ?></td>
            <td><?php echo sprintf('%.2f', $t->amount / 100); ?> <?php echo strtoupper($t->currency); ?></td>
            <td><?php echo $t->created_at; ?></td>
            <td><a href="launcher.exe" download rel="noopener noreferrer" target="_blank">
   Download Launcher
</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <br>
    
  </div>
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