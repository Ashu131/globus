<?php 
  session_start();
  include 'config.php';
$errorEmail=''; $errorPassword='';

  
    if (isset($_SESSION['globus-admin'])) {
        
        echo "<script>window.location='index.php'</script>";
    
    }
      
    if (isset($_POST['login'])) {
        $email= $_POST['useremail'];
        $password= $_POST['pwd'];

        $query="SELECT * FROM admin WHERE user='".$email."'";
        $run= mysqli_query($connect, $query);
            if (mysqli_num_rows($run)>0) {
                  $result=mysqli_fetch_array($run);
                  
                  if ($result['password']==$_POST['pwd']) {
                    $_SESSION['globus-admin']=$email;
                    echo "<script>window.location='index.php'</script>";
                  }else{
                    $errorPassword='Incorrect Password';
                  }

            }else{
              $errorEmail='Incorrect Email';
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
  <title>Admin Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" placeholder="Enter Email" name="useremail" required="required">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" placeholder="Enter Password" name="pwd" required="required">
          </div>
          <!-- <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div> -->
          <input type="submit" name="login" value="Login" class="btn btn-block btn-primary">
        </form>
        <div class="text-center">
          <p class="d-block small mt-3 text-danger"><?php echo $errorEmail; ?></p>
          <p class="d-block small text-danger"><?php echo $errorPassword; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
