<?php 
session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    //something was posted
    $user_name = $_POST['user_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
       
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($last_name) && !empty($email))
    {

      //save to database
      $user_id = random_num(20);
      $id=1;
      $query = "insert into customers(id,email,name,surname,age,password) values ('$id','$email','$user_name','$last_name','$age','$password')";

      pg_query($con, $query);

      header("Location: login.php");
      die;

    }else
    {
      echo "Please enter some valid information!";
    }
    }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body onload="document.registration.user_name.focus();">

  <style type="text/css">

  *{
    background: white;
  }
  .main-form{
      padding: 30px 40px;
    }
    .form{
      padding-bottom: 20px;
      margin-bottom: 10px;
      position: relative;
    }
  .form input{
      border: 2px solid #f0f0f0;
      border-radius: 4px;
      font-family: inherit;
      width: 100%;
      padding: 12px;
      display: block;
      font-size: 14px;
    }
    .form i{
      position: absolute;
      top: 32px;
      right: 10px;
      visibility: hidden;

    }
    .form small{
      position: absolute;
      bottom: 0;
      left: 5px;
      visibility: hidden;

    }
  #text{
    color:black;
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
  }

  #button{
        border-radius: 16px;
    padding: 10px;
    width: 70px;
    color: white;
    background-color: lightblue;
    border: none;
    outline: none;
  }

  #box{

    margin: auto;
    width: 300px;
    padding: 20px;
  } </style>
  
  <div id="box">
    
    <form onsubmit="return myfun()" method="post" class="main-form" >
      <div style="font-size: 30px;margin: 10px;color: black;"><b>Signup</b></div>
      <div class="form">
        <label for="username">Username</label> <br>
        <input id="username" type="text" name="user_name"  placeholder="Name" autocomplete="off">
        <i class="fas sucess">&#xf058;</i>
              <i class="fas error">&#xf06a;</i>
              <small class="message">error message</small>
      </div>
      <br>
      <div class="form">
          <label for="lastname">Last Name</label><br>
        <input id="lastname" type="text" name="last_name" placeholder="Last name"  autocomplete="off">
        <i class="fas sucess">&#xf058;</i>
              <i class="fas error">&#xf06a;</i>
              <small class="message">error message</small>
      <div>
      

      <br>  
      <div class="form">
        <label for="email">Email</label> <br>
        <input id="email" type="email" name="email" placeholder="Email"  autocomplete="off">
        <i class="fas sucess">&#xf058;</i>
              <i class="fas error">&#xf06a;</i>
              <small class="message">error message</small>
      </div>
      <br>
      <div class="form">
        <label for="password">Password</label> <br>
        <input id="password1" type="password" name="password" placeholder="Password"  autocomplete="off">
        <i class="fas sucess">&#xf058;</i>
              <i class="fas error">&#xf06a;</i>
          <small class="message">error message</small>
      </div>
      <br>
      <div class="form">
            <label for="password">Password confirm</label> <br>
            <input id="password2" type="password" name="password_confirm" placeholder="Confirm Password"  autocomplete="off">
            <i class="fas sucess">&#xf058;</i>
              <i class="fas error">&#xf06a;</i>
              <small class="message">error message</small>
        </div>
    <br>
        
      <div class="form">
          <label for="age">Age</label><br>
        <input id="age" type="text" name="age" placeholder="age"  autocomplete="off">
      <div>
         <br>
        <input id="button" type="submit" value="Signup"><br><br>

      <a href="login.php">Click to Login</a><br><br>
    </div>
    </form>
  </div>


<script type = "text/javascript">
  function myfun(){
        const username=document.getElementById('username');
        const lastname=document.getElementById('lastname');
        const email=document.getElementById('email');
        const password1=document.getElementById('password1');
        const password2=document.getElementById('password2');
        const message=document.getElementsByClassName('message');
        const icon=document.querySelector('i');
        const sucess=document.getElementsByClassName('sucess');
        const error=document.getElementsByClassName('error');
      let u=0;
      let l=0;
        let e=0;
        let p1=0;
        let p2=0;



        //validation for username//
        if(username.value==""){
          username.style.borderColor = 'red';
          message[0].style.visibility = 'visible';
          message[0].style.color='red';
          message[0].innerText="Username cannot be blank";
          error[0].style.visibility = 'visible';
          error[0].style.color='red';
          u=0;
        }
        else if(username.value.length<3&&username.value.length>0){
          username.style.borderColor = 'red';
          message[0].style.visibility = 'visible';
          message[0].style.color='red';
          message[0].innerText="Username have atleast 3 character";
          error[0].style.visibility = 'visible';
          error[0].style.color='red';
          u=0;
        }
        else if(username.value.length>3&&(isNaN(parseFloat(username.value)))){
          username.style.borderColor = 'green';
          error[0].style.visibility = 'hidden';
          message[0].style.visibility = 'hidden';
          sucess[0].style.visibility = 'visible';
          sucess[0].style.color='green';
          u=1;


        }
        else{
          username.style.borderColor = 'red';
          message[0].style.visibility = 'visible';
          message[0].style.color='red';
          message[0].innerText="Number is not allowed in the beggining";
          error[0].style.visibility = 'visible';
          error[0].style.color='red';
          u=0;

        }
        //lastname validation//
        if(lastname.value==""){
          lastname.style.borderColor = 'red';
          message[1].style.visibility = 'visible';
          message[1].style.color='red';
          message[1].innerText="Lastname cannot be blank";
          error[1].style.visibility = 'visible';
          error[1].style.color='red';
          l=0;
        }
        else if(lastname.value.length<3&&lastname.value.length>0){
          lastname.style.borderColor = 'red';
          message[1].style.visibility = 'visible';
          message[1].style.color='red';
          message[1].innerText="Lastname have atleast 3 character";
          error[1].style.visibility = 'visible';
          error[1].style.color='red';
          l=1;
        }
        else if(lastname.value.length>3&&(isNaN(parseFloat(lastname.value)))){
          lastname.style.borderColor = 'green';
          error[1].style.visibility = 'hidden';
          message[1].style.visibility = 'hidden';
          sucess[1].style.visibility = 'visible';
          sucess[1].style.color='green';
          l=1;


        }
        else{
          lastname.style.borderColor = 'red';
          message[1].style.visibility = 'visible';
          message[1].style.color='red';
          message[1].innerText="Number is not allowed in the beggining";
          error[1].style.visibility = 'visible';
          error[1].style.color='red';
          l=1;

        }
        
        //email validation//

        if(email.value==""){
          email.style.borderColor = 'red';
          message[2].style.visibility = 'visible';
          message[2].style.color='red';
          message[2].innerText="Email cannot be blank";
          error[2].style.visibility = 'visible';
          error[2].style.color='red';
          e=0;
        }
        else if(email.value.indexOf('@')<3||email.value.lastIndexOf('.')>=email.value.length-2){
          email.style.borderColor = 'red';
          message[2].style.visibility = 'visible';
          message[2].style.color='red';
          message[2].innerText="Invalid email";
          error[2].style.visibility = 'visible';
          error[2].style.color='red';
          e=0;
        }
        else{
          email.style.borderColor = 'green';
          error[2].style.visibility = 'hidden';
          message[2].style.visibility = 'hidden';
          sucess[2].style.visibility = 'visible';
          sucess[2].style.color='green';
          e=1;
        }
        //validation of password//

        var numbers=/[0-9]/g;
        if (password1.value==""){
          password1.style.borderColor = 'red';
          message[3].style.visibility = 'visible';
          message[3].style.color='red';
          message[3].innerText="Password cannot be blank";
          error[3].style.visibility = 'visible';
          error[3].style.color='red';
          p1=0;
        }
        else if(password1.value.length<9){
          password1.style.borderColor = 'red';
          message[3].style.visibility = 'visible';
          message[3].style.color='red';
          message[3].innerText="Password must be minimum 8 character";
          error[3].style.visibility = 'visible';
          error[3].style.color='red';
          p1=0;
        }

        else if(!(password1.value.match(numbers))){
          password1.style.borderColor = 'red';
          message[3].style.visibility = 'visible';
          message[3].style.color='red';
          message[3].innerText="Password have atleast a number";
          error[3].style.visibility = 'visible';
          error[3].style.color='red';
          p1=0;
        }

        else{
          password1.style.borderColor = 'green';
          error[3].style.visibility = 'hidden';
          message[3].style.visibility = 'hidden';
          sucess[3].style.visibility = 'visible';
          sucess[3].style.color='green';
          p1=1;
        }

        //password check//
        if(password2.value==""){
          password2.style.borderColor = 'red';
          message[4].style.visibility = 'visible';
          message[4].style.color='red';
          message[4].innerText="Password cannot be blank";
          error[4].style.visibility = 'visible';
          error[4].style.color='red';
          p2=0;
        }
        else if(password1.value!=password2.value){
          password2.style.borderColor = 'red';
          message[4].style.visibility = 'visible';
          message[4].style.color='red';
          message[4].innerText="Password doesnot match";
          error[4].style.visibility = 'visible';
          error[4].style.color='red';
          p2=0;
        }
        else{
          password2.style.borderColor = 'green';
          error[4].style.visibility = 'hidden';
          message[4].style.visibility = 'hidden';
          sucess[4].style.visibility = 'visible';
          sucess[4].style.color='green';
          p2=1;
        }

        //return condition//

        if(u==1&&l==1&&e==1&&p1==1&&p2==1){
          return true;
        }
        else
          return false;

      }

 </script>
</body>
</html>

