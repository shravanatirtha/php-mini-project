<html>
<body>
<?php

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signin']))
    {
 
   login();
     
    }
    
    function login()
  {
    echo "Seach called<br>";
    $host="localhost";
  $username="root";
  $pwd="";
  $con=mysqli_connect($host,$username,$pwd);
  if($con)
  {
    echo " Connection to mysql -Sucess<br>";
    
         
           $con=mysqli_connect($host,$username,$pwd,"bookstore");
           $sql="select * from users";
           $result = $con->query($sql);
          if ($result->num_rows > 0)
           {
            // output data of each row
               echo"<table><tr><th>username </th> <th>password</th></tr>";
              while($row = $result->fetch_assoc()) 
              {
                echo "<tr><td>".$row["UserName"]. "</td><td>". $row["Password"]."</tr><br>";
              }
              echo"</table>";
            } 
          else {
                  echo "0 results";
                }
    $con->close();
  }
  else {
    echo"Unable to connect to Database";
  }
}
?>
</body>
</html>