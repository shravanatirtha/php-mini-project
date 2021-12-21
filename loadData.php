<?php
  $host="localhost";
  $username="root";
  $pwd="";
  $con=mysqli_connect($host,$username,$pwd);
  if($con)
  {
    echo " Connection to mysql -Sucess<br>";
    $sql="create database if not exists boostore";
    $result=$con->query($sql);
     if($result==true)
      {
           echo"Database created<br>";
           $sql="CREATE TABLE IF NOT EXISTS `users` (
            `fullname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            PRIMARY KEY (`UserName`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
           $con=mysqli_connect($host,$username,$pwd,"bookstore");
            if($con->query($sql))
             {
               echo"Table created";
              }
              else
              {
                  echo"Table creation Failed";
              }
 
      }
      else
      {
           echo"Database creation error<br>";
      }
  }
  else
   {
       echo "Connection to mysql-Failure<br>";
    }

   $con->close();
?>
