<<<<<<< HEAD
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Reports</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <br><br>
<center><h1>Users Reports</h1></center>
      <div class="border"></div>
  
<!-- data feaching  -->
<table>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Address</th>
    <th>Profession</th>
    <th>Date Of Birth</th>
    <th>Block User</th>

  </tr>

  <?php
  include 'connection.php';
  
  $q = "SELECT * FROM `users`";
  $query = mysqli_query($connection,$q);

  while($res = mysqli_fetch_array($query)) {
    ?>
    <!-- <br> -->

    <tr>
      <td><?php echo $res['id'];?></td>
    <td><?php echo $res['firstname'];?></td>
    <td><?php echo $res['lastname'];?></td>
    <td><?php echo $res['mobile'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['address'];?></td>
    <td><?php echo $res['profession'];?></td>
    <td><?php echo $res['dob'];?></td>
    <td><a><Button type="submit"> Block </Button></a></td>
  </tr>
    
  
    <!-- <br> -->
    <?php
  }
  ?>

</table>

<style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 98%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</body>
=======
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Reports</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <br><br>
<center><h1>Users Reports</h1></center>
      <div class="border"></div>
  
<!-- data feaching  -->
<table>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Address</th>
    <th>Profession</th>
    <th>Date Of Birth</th>
    <th>Block User</th>

  </tr>

  <?php
  include 'connection.php';
  
  $q = "SELECT * FROM `users`";
  $query = mysqli_query($connection,$q);

  while($res = mysqli_fetch_array($query)) {
    ?>
    <!-- <br> -->

    <tr>
      <td><?php echo $res['id'];?></td>
    <td><?php echo $res['firstname'];?></td>
    <td><?php echo $res['lastname'];?></td>
    <td><?php echo $res['mobile'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['address'];?></td>
    <td><?php echo $res['profession'];?></td>
    <td><?php echo $res['dob'];?></td>
    <td><a><Button type="submit"> Block </Button></a></td>
  </tr>
    
  
    <!-- <br> -->
    <?php
  }
  ?>

</table>

<style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 98%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</body>
>>>>>>> 31a0969fb19bd4083b40ac5af7e66d735e0ce380
</html>