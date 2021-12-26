<?php
include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //to prevent from mysqli injection  
 
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($con, $username);

  $sql = "update users set password='$password' where username = '$username'";
  $result = mysqli_query($con, $sql);
 
  if($result){
    $q="select * from users where username='$username'";
    $r = mysqli_query($con, $q);
    $row2 = mysqli_fetch_array($r, MYSQLI_ASSOC);
  $c = mysqli_num_rows($r);
  if ($c>0) {
    while($c>0){
      echo "<b>Fullname:</b>{$row2['fullname']}  <br> ".  
       "<b>Username :</b> {$row2['username']} <br> ".  
       "<b>Password :</b> {$row2['password']} <br> ".  
       "" ;
       $c--;
    }
  
 }
else{
  echo "Oops! Something went wrong. Please try again later.";

}
  }
  
}
else {
  echo "Oops! Something went wrong. Please try again later.";
}

?>