<?php
include('config.php');

$pid = $_POST['pid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //to prevent from mysqli injection  
 
  $pid = stripcslashes($pid);
  
  $pid = mysqli_real_escape_string($con, $pid);

  $sql = "select * from books where pid = '$pid'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count>0) {
      while($count>0){
        echo "<b>Book Id :</b>{$row['pid']}  <br> ".  
         "<b>Title :</b> {$row['title']} <br> ".  
         "<b>Author :</b> {$row['author']} <br> ". 
         "<b>MRP : </b>{$row['mrp']} <br> ". 
         "<b>Price :</b> {$row['author']} <br> ". 
         "<b>Discount :</b> {$row['discount']} <br> ". 
         "<b>Available : </b>{$row['available']} <br> ". 
         "<b>Publisher :</b> {$row['publisher']} <br> ". 
         "<b>Edition : </b>{$row['edition']} <br> ". 
         "<b>Category : </b>{$row['category']} <br> ". 
         "<b>Description : </b>{$row['description']} <br> ". 
         "<b>Language : </b>{$row['language']} <br> ".
         "<b>Page : </b>{$row['page']} <br> ". 
         "<b>Weight :</b> {$row['weight']} <br> ".  
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