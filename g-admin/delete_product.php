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
$deleteQuery="DELETE FROM products WHERE id=".$_GET['id'];
$deleteRun=mysqli_query($connect,$deleteQuery);
// echo $deleteQuery;
echo mysqli_error($connect);
if ($deleteRun) {
    echo "<script>window.location='index.php?deleteResult=Record deleted'</script>";
    
} else {
    echo "<script>window.location='index.php?deleteResult=Record  Not deleted'</script>";
}







/**
 * =====================================================
 * TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST 
 * TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST 
 * TEST===================================================
 */
// $dataqry="SELECT *, category.cat_name, sub_category.subcat_name FROM products 
//             JOIN category ON products.cat_code=category.cat_code 
//             JOIN sub_category ON products.subcat_code=sub_category.subcat_code
//             ORDER BY products.id DESC
//             ";
  
// $dataqry="SELECT * FROM products";

// $datarun= mysqli_query($connect,$dataqry);
// $result=mysqli_fetch_assoc($datarun);
// while ($result=mysqli_fetch_assoc($datarun)) {
//     print_r($result);
// }




?>