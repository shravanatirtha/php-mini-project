
<!DOCTYPE html>
<!-- saved from url=(0085)https://www.bootstrapdash.com/demo/stellar-admin-free/jquery/pages/samples/login.html -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Book Store</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./login_files/simple-line-icons.css">
  <link rel="stylesheet" href="./login_files/flag-icon.min.css">
  <link rel="stylesheet" href="./login_files/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
  <link rel="stylesheet" href="./login_files/style.css" <!--="" end="" layout="" styles="" --="">
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
                <img src="./login_files/logo.svg">
              </div>
              <h4>Online Book Store</h4>
              <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="./loginValidate.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" name="username" id="exampleInputEmail1"
                    placeholder="Username" required>
                    <span class="invalid-feedback">
                   
                    </span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" id="exampleInputPassword1"
                    placeholder="Password" required>
                    <span class="invalid-feedback"></span>
                </div>
                <div class="mt-3">
                  <input type="submit" name="signin" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    value="Sign in">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in <i
                        class="input-helper"></i></label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="userSignUp.php" class="text-primary">Register</a>
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
  <script src="./login_files/vendor.bundle.base.js.download"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./login_files/off-canvas.js.download"></script>
  <script src="./login_files/misc.js.download"></script>
  <!-- endinject -->

  <div id="squirrelson" style="position: fixed; bottom: -5%; left: -100%; z-index: 9999; visibility: hidden;"><img
      src="chrome-extension://mdafemlphdjnhbdglfnankciemdngach/squirrels/squirrel_1.png" width="350px" height="271px"
      id="squirrelImage"></div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['signin'])) {

  login();

}

function login()
{
  echo "Seach called<br>";
  $host = "localhost";
  $username = "root";
  $pwd = "";
  $con = mysqli_connect($host, $username, $pwd);
  if ($con) {
    echo " Connection to mysql -Sucess<br>";


    $con = mysqli_connect($host, $username, $pwd, "bookstore");
    $sql = "select * from users";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      echo "<table><tr><th>username </th> <th>password</th></tr>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["UserName"] . "</td><td>" . $row["Password"] . "</tr><br>";
      }
      echo "</table>";
    }
    else {
      echo "0 results";
    }
    $con->close();
  }
  else {
    echo "Unable to connect to Database";
  }
}
?>
