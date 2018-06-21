<?php 
session_start();
  include 'config.php';
  try {
    if (!isset($_SESSION['globus-admin'])) {
      echo "<script>window.location='login.php'</script>";
      
    }
  } catch (Exception $e) {
    echo $e;
  }
$showQuery="UPDATE products SET `show-hide`=1 WHERE id=".$_GET['id'];
$showRun=mysqli_query($connect,$showQuery);
// echo $showQuery;
echo mysqli_error($connect);
if ($showRun) {
    echo "<script>window.location='index.php'</script>";
    
} else {
    echo "<script>window.location='index.php'</script>";
}
