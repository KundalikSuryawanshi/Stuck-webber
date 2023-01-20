<<<<<<< HEAD

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question Report</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<br><br>
<center><h1>Query Reports</h1></center>
      <div class="border"></div>

      <!-- data feaching  -->
<table>
  <tr>
    <th>ID</th>
    <th>Question</th>
    <th>Answer</th>
   
  </tr>

  <?php
  include 'connection.php';
  
  $q = "SELECT * FROM `questions`";
  $query = mysqli_query($connection,$q);

  while($res = mysqli_fetch_array($query)) {
    ?>
    
<tr>
    <td><?php echo $res['qid'];?></td>
    <td><?php echo $res['question'];?></td>
    <td><?php echo $res['answer'];?></td>
    
  </tr>
   
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
</html>

=======

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question Report</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<br><br>
<center><h1>Query Reports</h1></center>
      <div class="border"></div>

      <!-- data feaching  -->
<table>
  <tr>
    <th>ID</th>
    <th>Question</th>
    <th>Answer</th>
   
  </tr>

  <?php
  include 'connection.php';
  
  $q = "SELECT * FROM `questions`";
  $query = mysqli_query($connection,$q);

  while($res = mysqli_fetch_array($query)) {
    ?>
    
<tr>
    <td><?php echo $res['qid'];?></td>
    <td><?php echo $res['question'];?></td>
    <td><?php echo $res['answer'];?></td>
    
  </tr>
   
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
</html>

>>>>>>> 31a0969fb19bd4083b40ac5af7e66d735e0ce380
