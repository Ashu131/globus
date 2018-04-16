<?php 
session_start();
$a=session_destroy();
echo "<script>window.location='login.php'</script>";
 ?>