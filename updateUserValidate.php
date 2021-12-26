<?php
include('config.php');

$username = $_POST['username'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //to prevent from mysqli injection  
 
  $username = stripcslashes($username);
  
  $username = mysqli_real_escape_string($con, $username);

  $sql = "select * from users where username = '$username'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count>0) {
      while($count>0){
        echo "<b>Fullname:</b>{$row['fullname']}  <br> ".  
         "<b>Username :</b> {$row['username']} <br> ".  
         "<b>Password :</b> {$row['password']} <br> ".  
         "" ;
         $count--;
      }
    
   }
  else{
    echo "Oops! Something went wrong. Please try again later.";
 
  }
}
else {
  echo "Oops! Something went wrong. Please try again later.";
}

?>