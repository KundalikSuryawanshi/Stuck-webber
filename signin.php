
<?php
session_start();
include 'connection.php';
if(isset($_REQUEST['signin'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $res = mysqli_query($connection, "select * from users where email='$email' and password='$password'");
  $result = mysqli_fetch_array($res);
  
  if($result) {
      echo "<script type='text/javascript'>alert('sing in success');</script>";
  
    /*echo '<script type="text/javascript">';
    echo ' alert("Successfully sing in")';
    echo '</script>';*/ 

    $_SESSION["signin"] = "1";
    
  }
  else {
    echo "<script type='text/javascript'>alert('sing in failed');</script>";
    header("location:home.php");
    header("location:signin.php?err=1"); 
    echo"failed to signup";
  }
}

if(isset($_REQUEST["err"])){
  $msg = "invalid username of password";
  header("location:signin.php?err=1");
  echo"$msg";
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>signin</title>
</head>
<body>
  <center>
    <div id="form">
    <form action="signin.php" method="POST">
      <th><h3>User SignIn</h3></th>
      <div class="border"></div>
      <br>
      <label for="">Email</label>
        <input type="text" name="email">
        <br>
        <br>
      <label for="">password</label>
        <input type="text" name="password">
        <br>
        <br>
        <center><Button type="submit" name="signin">SignIn</Button></center>
        <br>
      <a href="signup.php">Don't have a account?</a><br><br>
      <a href="adminsignin.php">Sign In as Admin</a>
    </form>
    </div>
  </center>
</body>
</html>