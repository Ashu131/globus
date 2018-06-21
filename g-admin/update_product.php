<?php 
include 'config.php';
if (isset($_POST['update'])) {
    $product        = $_POST['product_name'];
    $brand          = $_POST['brand'];
    $mrp            = $_POST['mrp'];
    $desc           = $_POST['product_desc'];
    $pointer        = $_POST['pointers'];
    $use            = $_POST['product_use'];
    $cat            = $_POST['cat_code'];
    $subcat         = $_POST['subcat'];
    $link           = $_POST['url'];
    $id             = $_POST['product_id'];

#UPDATE DATA PDO PREPARE & EXECUTE
    $sql='UPDATE products SET product_name=?, brand=?, mrp=?, product_desc=?, pointers=?, product_use=?, cat_code=?, subcat_code=?, url=? WHERE id=?';
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$product,$brand,$mrp,$desc,$pointer,$use,$cat,$subcat,$link,$id]);

    if ($stmt) {
    // echo "<script>window.location='index.php'</script>";
      $resultOfUpdate= "Record Updated";
      header('location:index.php');
      die();
    }else{
      $resultOfUpdate= "Record not Updated";
    echo "<script>window.location='edit_product.php?id='$id</script>";
    } 
 
}
 ?>