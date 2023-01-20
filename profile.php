<?php
session_start();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>profile</title>
</head>
<body>
  
  <br>
  <center>
      <h1>Profile</h1>
      <div class="border"></div>

      <div class="form">
        <form action="" method="POST">
        <label for="">First Name</label>
          <?php echo ":" . $_SESSION["firstname"] . ""; ?>  
          <br>
        <label for="">Last Name</label>
          <?phpecho ":" . $_SESSION["lastname"] . ""; ?>  
          <br>
        <label for="">Mobile</label>
          <?php echo ":" . $_SESSION["mobile"] . ""; ?>  
          <br>
        <label for="">Email</label>
          <?php echo ":" . $_SESSION["email"] . ""; ?>  
          <br>
        <label for="">Profession</label> 
          <?php echo ":" . $_SESSION["profession"] . ""; ?>  
          <br>
        <label for="">Address</label> 
          <?php echo ":" . $_SESSION["address"] . ""; ?>  
          <br>
        <label for="">Date of Birth</label>
          <?php echo ":" . $_SESSION["dob"] . ""; ?>  
          <br>
          <br>
        <div class="bt-down">
        <button type="submit" name="backtohome"><a href="home.php">Home</a></button>
          <br>
          <br>
        <button type="submit" name="signout">Signout</button>
        </div>
        </form>
      </div>

  
  </center>
</body>
</html>