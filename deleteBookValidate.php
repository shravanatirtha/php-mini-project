<?php
include('config.php');
$pid = $_POST['pid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //to prevent from mysqli injection  
    $pid = stripcslashes($pid);

    $pid = mysqli_real_escape_string($con, $pid);

    $sql = "delete from users where pid = '$pid'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location: deleteBook.php");
    }
    else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
else {
    echo "Oops! Something went wrong. Please try again later.";
}

?>