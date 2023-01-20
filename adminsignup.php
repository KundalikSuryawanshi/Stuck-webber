<<<<<<< HEAD
<!-- user registration -->
<?php
  include 'connection.php';
  session_start();

  if(isset($_POST['signup'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "INSERT INTO `admin`(`firstname`, `lastname`, `mobile`, `email`, `password`, `id`) VALUES ('$firstname','$lastname','$mobile','$email','$password','');
    $query = mysqli_query($connection,$q);

    if($query){
      echo "<script type='text/javascript'>alert('signup in success');</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('singup failed');</script>";
    }
  }
  

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>singup admin</title>
</head>
<body>
  <div id="signup">
  <center><h3>Admin Sign Up</h3></center>
  <div class="border"></div>
  <br>
  <center><h4>Create Your Account</h4></center>
  <br>
  <center>

  <div class="form">
  <form action="home.php" method="POST">
    <tr>
      <lable>First Name</lable>
        <input type="text" name="firstname">
        <br>
        <br>
      <lable>Last name</lable>
        <input type="text" name="lastname">
        <br>
        <br>
      <lable>Mobile</lable>
        <input type="int" name="mobile">
        <br>
        <br>
      <lable>Email</lable>
        <input type="email" name="email">
        <br>
        <br>
      <lable>password</lable>
        <input type="text" name="password">
        <br>
        <br>
        <a href="adminsignin.php">Sign In as a Admin</a><br>
        <br>
        <center><Button type="submit" name="signup">signup</Button></center>
        
  
    </tr>
  </form>
  </div>
  </center>
  </div>
</body>
=======
<!-- user registration -->
<?php
  include 'connection.php';
  session_start();

  if(isset($_POST['signup'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "INSERT INTO `admin`(`firstname`, `lastname`, `mobile`, `email`, `password`, `id`) VALUES ('$firstname','$lastname','$mobile','$email','$password','');
    $query = mysqli_query($connection,$q);

    if($query){
      echo "<script type='text/javascript'>alert('signup in success');</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('singup failed');</script>";
    }
  }
  

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>singup admin</title>
</head>
<body>
  <div id="signup">
  <center><h3>Admin Sign Up</h3></center>
  <div class="border"></div>
  <br>
  <center><h4>Create Your Account</h4></center>
  <br>
  <center>

  <div class="form">
  <form action="home.php" method="POST">
    <tr>
      <lable>First Name</lable>
        <input type="text" name="firstname">
        <br>
        <br>
      <lable>Last name</lable>
        <input type="text" name="lastname">
        <br>
        <br>
      <lable>Mobile</lable>
        <input type="int" name="mobile">
        <br>
        <br>
      <lable>Email</lable>
        <input type="email" name="email">
        <br>
        <br>
      <lable>password</lable>
        <input type="text" name="password">
        <br>
        <br>
        <a href="adminsignin.php">Sign In as a Admin</a><br>
        <br>
        <center><Button type="submit" name="signup">signup</Button></center>
        
  
    </tr>
  </form>
  </div>
  </center>
  </div>
</body>
>>>>>>> 31a0969fb19bd4083b40ac5af7e66d735e0ce380
</html>