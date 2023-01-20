<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,'stuckwebber');

if($connection){
  //echo"connected";
}
else {
  echo"Error";
}
?>  