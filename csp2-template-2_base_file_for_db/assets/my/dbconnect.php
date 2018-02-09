<?php

$conn = mysqli_connect('localhost','root','','DBkraffbeeer_tuitt');
if($conn){
  echo "<h2>Database connection successful</h2>";
} else {
  echo "connection not successful:" . mysqli_error($conn);
}


?>