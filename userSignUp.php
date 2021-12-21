<?php
// Include config file
require_once "config.php";


// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  }
  elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
    $username_err = "Username can only contain letters, numbers, and underscores.";
  }
  else {
    // Prepare a select statement
    $sql = "SELECT id FROM users WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = trim($_POST["username"]);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken.";
        }
        else {
          $username = trim($_POST["username"]);
        }
      }
      else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  }
  elseif (strlen(trim($_POST["password"])) < 6) {
    $password_err = "Password must have atleast 6 characters.";
  }
  else {
    $password = trim($_POST["password"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm password.";
  }
  else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "Password did not match.";
    }
  }

  // Check input errors before inserting in database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

    // Prepare an insert statement
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("location: login.php");
      }
      else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<!-- saved from url=(0057)http://localhost/college/php-mini-project/user/login.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Book Store</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./newUser_files/simple-line-icons.css">
  <link rel="stylesheet" href="./newUser_files/flag-icon.min.css">
  <link rel="stylesheet" href="./newUser_files/vendor.bundle.base.css">

  <link rel="stylesheet" href="./newUser_files/style.css" <!--="" end="" layout="" styles="" --="">
  <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/stellar-admin-free/jquery/images/favicon.png">
</head>

<body data-new-gr-c-s-check-loaded="14.1042.0" data-gr-ext-installed="">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="./newUser_files/logo.svg">
              </div>
              <h4>Add book</h4>
              <!-- <h6 class="font-weight-light">Sign in to continue.</h6> -->
              <form class="pt-12  " method="post" action="http://localhost/college/php-mini-project/user/login.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="pid" id="exampleInputEmail1" placeholder="PID" required>
                </div>
                <div class="form-group">
                   </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="title" id="exampleInputEmail1" placeholder="Title" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="author" id="exampleInputEmail1" placeholder="Author" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="mrp" id="exampleInputEmail1" placeholder="MRP" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="price" id="exampleInputEmail1" placeholder="Price" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="discount" id="exampleInputEmail1" placeholder="Discount" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="available" id="exampleInputEmail1" placeholder="Available" required>
                </div><div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="publisher" id="exampleInputEmail1" placeholder="Publisher" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="edition" id="exampleInputEmail1" placeholder="Edition" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="category" id="exampleInputEmail1" placeholder="Category" required>
                </div><div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="description" id="exampleInputEmail1" placeholder="Description" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="language" id="exampleInputEmail1" placeholder="Language" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="page" id="exampleInputEmail1" placeholder="Page" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="weight" id="exampleInputEmail1" placeholder="Weight" required>
                </div>
                <div class="mt-3">
                  <input type="submit" name="storebook" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Store Book">
                </div>
               </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./newUser_files/vendor.bundle.base.js.download"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./newUser_files/off-canvas.js.download"></script>
  <script src="./newUser_files/misc.js.download"></script>
  <!-- endinject -->

  <div id="squirrelson" style="position: fixed; bottom: -5%; left: -100%; z-index: 9999; visibility: hidden;"><img src="chrome-extension://mdafemlphdjnhbdglfnankciemdngach/squirrels/squirrel_1.png" width="350px" height="271px" id="squirrelImage"></div>

<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

<div id="squirrelson" style="position: fixed; bottom: -5%; left: -100%; z-index: 9999; visibility: hidden;"><img src="chrome-extension://mdafemlphdjnhbdglfnankciemdngach/squirrels/squirrel_1.png" width="350px" height="271px" id="squirrelImage"></div></body></html>