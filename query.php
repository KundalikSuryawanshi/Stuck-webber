<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Query</title>
</head>
<body>
  <br>
<center><h1>Query</h1></center>
      <div class="border"></div>
<div class="form1">
  <div class="search-box">
  <center>
    <input type="text" name="question"> 
   <button type="submit" name="btn-search">Search</button>
    <br>
    <br>
    </div>
  </center>
<form action="#" method="POST">
  <div class="search-box">
  <div class="search-box">
    <label for="">Enter Your Query:</label>
    <input type="text" name="uQuestion"> 
    <br>
    <br>
    <center><label for="">Answer</label></center>
    <textarea name="uAnswer" id="" cols="100" rows="7"></textarea> 
    <br>
    <br>
    <center><Button type="submit" name="post">Post</Button></center>
  </div>
  </div>
</form>
<br>
<center><h1>Feed</h1></center>
      <div class="border"></div>
    
<?php 
  include 'connection.php';
  //question posting
  if(isset($_POST['post'])) {
    $question = $_POST['uQuestion'];
    $answer = $_POST['uAnswer'];

    $q = "INSERT INTO `questions`(`qid`, `question`, `answer`) VALUES ('','$question','$answer')";
    $query =  mysqli_query($connection,$q);

    if($query){
          echo "<script type='text/javascript'>alert('saved');</script>";
         }
         else{
           echo "<script type='text/javascript'>alert('failed');</script>";
         }
  }
  ?>

  <!-- featch data from db -->
  <table>
  <tr>
    <th>ID</th>
    <th>Question</th>
    <th>Answer</th>
    <th>Delete</th>
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
    <td><Button type="submit">Delete</Button></td>
  </tr>
   
    <?php
  }
  ?>

</table>


    <!-- searching in database -->
<?php
//searching in db
//include 'connection.php';
$con = new PDO("mysql:host=localhost;dbname=stuckwebber",'root','');
if(isset($_POST["btn-search"])) {
  $sQuestion = $_POST["question"];
  $search = $con->prepare("SELECT * FROM `questions` WHERE question = '$sQuestion'");
  
  $search->setFetchMode(PDO::FETCH_OBJ);
  $search->execute();
  
  if($row = $search ->fetch()) {
    ?>
    <br><br><br>
    <table>
      <tr>
        <th>Question</th>
        <th>Answer</th>
      </tr>
      <tr>
        <td><?php echo $row-> questions; ?></td>
        <td><?php echo $row-> answer; ?></td>
      </tr>
    </table>
    <?php
  }

  else{
    echo "dose not found";
  }
  } ?>
  
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

