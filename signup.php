<!-- user registration -->
<?php
  include 'connection.php';
  session_start();

  if(isset($_POST['signup'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $profession = $_POST['profession'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $q = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `mobile`, `email`, `address`,
     `profession`, `dob`, `password`) VALUES ('', '$firstname', '$lastname', '$mobile', '$email',
      '$address', '$profession', '$dob', '$password')";
      
    $query = mysqli_query($connection,$q);

//session for profile data
  $_SESSION["firstname"] = $firstname;
  $_SESSION["lastname"] = $lastname;
  $_SESSION["mobile"] = $mobile;
  $_SESSION["email"] = $email;
  $_SESSION["address"] = $address;
  $_SESSION["profession"] = $profession;
  $_SESSION['dob'] = $dob;

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
  <title>singup</title>
</head>
<body>
  <div id="signup">
  <center><h3>Sign Up</h3></center>
  <div class="border"></div>
  <br>
  <center><h4>Create Your Account</h4></center>
  <br>
  <center>

  <div class="form">
  <form action="home.php" method="POST">
    <tr>
      <lable>first Name</lable>
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
      <lable>profession</lable>
        <input type="text" name="profession">
        <br>
        <br>
      <lable>address</lable>
        <input type="text" name="address">
        <br>
        <br>
      <lable>date of birth</lable>
        <input type="date" name="dob">
        <br>
        <br>
      <lable>password</lable>
        <input type="text" name="password">
        <br>
        <br>
        <a href="signin.php">alredy have account?</a><br><br>
        <a href="adminsignup.php">Sign Up as a Admin</a><br>
        <br>
        <center><Button type="submit" name="signup">signup</Button></center>
        
  
    </tr>
  </form>
  </div>
  </center>
  </div>
</body>
</html>