<?php
include('config.php');
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //to prevent from mysqli injection  
  $fullname = stripcslashes($fullname);
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $fullname = mysqli_real_escape_string($con, $fullname);
  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);

  $sql = "select username from users where username = '$username'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<h1><center> Username already exists. Try again.</center></h1>";
   header("location: userSignUp.php"); 
  }
  else {
    $sql2 = "insert into users values('$fullname','$username','$password')";
  $result2 = mysqli_query($con, $sql2);
  // $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
  // $count2 = mysqli_num_rows($result2);
  if ($result2) {
   header("location: login.php"); 
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