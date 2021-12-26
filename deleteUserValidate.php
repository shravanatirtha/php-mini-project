<?php
include('config.php');
$username = $_POST['username'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //to prevent from mysqli injection  
    $username = stripcslashes($username);

    $username = mysqli_real_escape_string($con, $username);

    $sql = "delete from users where username = '$username'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location: deleteUser.php");
    }
    else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
else {
    echo "Oops! Something went wrong. Please try again later.";
}

?>