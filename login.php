<?php
session_start();
if(isset($_SESSION["username"])){
  header("Location: dashboard.php");
  }
  $error = "";
if (isset($_POST['login_user'])) {
  require('db.php');
  if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
	  $username = mysqli_real_escape_string($con,$username);
	  $password = stripslashes($_REQUEST['password']);
	  $password = mysqli_real_escape_string($con,$password);
    $query = "SELECT * FROM `user` WHERE email='$username'
and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $session = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
      if($rows==1){
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $session['username'];
    header("Location: dashboard.php");
      }
     else{
       $error = '<div class="alert alert-danger" role="alert">
       Please check your email and password again!
       </div>';
     }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accident Research Institute BUET</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Please login to continue</h1>
                  </div>
                  <form method="post" class="user" action="">
                    <div class="form-group">
                      <input type="email" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    <button type="submit" name="login_user" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                  </form>
                  <hr>
                  <?php echo $error;?>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <!-- <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
