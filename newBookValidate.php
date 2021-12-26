<?php
include('config.php');
$fullname = $_POST['fullname'];
$pid = $_POST['pid'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //to prevent from mysqli injection  
  
  $pid = stripcslashes($pid);
  $title = stripcslashes($title);
  $author = stripcslashes($author);
  $mrp = stripcslashes($mrp);
  $price = stripcslashes($price);
  $discount = stripcslashes($discount);
  $available = stripcslashes($available);
  $publisher = stripcslashes($publisher);
  $edition = stripcslashes($edition);
  $category = stripcslashes($category);
  $description = stripcslashes($description);
  $language = stripcslashes($language);
  $page = stripcslashes($page);
  $weight = stripcslashes($weight);
  
  $pid = mysqli_real_escape_string($con, $pid);
  $title = mysqli_real_escape_string($con, $title);
  $author = mysqli_real_escape_string($con, $author);
  $mrp = mysqli_real_escape_string($con, $mrp);
  $price = mysqli_real_escape_string($con, $price);
  $dicount = mysqli_real_escape_string($con, $dicount);
  $available = mysqli_real_escape_string($con, $available);
  $author = mysqli_real_escape_string($con, $author);
  $publisher = mysqli_real_escape_string($con, $publisher);
  $edition = mysqli_real_escape_string($con, $edition);
  $category = mysqli_real_escape_string($con, $category);
  $description = mysqli_real_escape_string($con, $description);
  $language = mysqli_real_escape_string($con, $language);
  $page = mysqli_real_escape_string($con, $page);
  $weight = mysqli_real_escape_string($con, $weight);

  $sql = "select pid from books where pid = '$pid'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<h1><center>Book Id already exists. Try again.</center></h1>";
   header("location: newBook.php"); 
  }
  else {
    $sql2 = " insert into books values('$pid', '$title', '$author', '$mrp','$price', '$dicount', '$available', '$publisher', '$edition', '$category', '$description', '$language', '$page', '$weight')";
  $result2 = mysqli_query($con, $sql2);
  // $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
  // $count2 = mysqli_num_rows($result2);
  if ($result2) {
   header("location: newBook.php"); 
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