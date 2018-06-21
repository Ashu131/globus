<?php 
  session_start();
  error_reporting(E_ALL);
  include 'config.php';
  try {
    if (!isset($_SESSION['globus-admin'])) {

      header('Location:login.php');
      die();
    }
  } catch (Exception $e) {
    echo $e;
  }

$resultOfUpdate='';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Product</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Tiny Mce -->
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php  include 'admin_nav.php'; ?>
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Edit Product</li>
      </ol>
    </div>
<?php  echo $resultOfUpdate; ?>

<?php
/**=================================================
 * Query for edit Product data STARTS HERE
 * =================================================
 */
$editProductQuery="SELECT * FROM products WHERE id=".$_GET['id'];
$editProductRunQuery=mysqli_query($connect,$editProductQuery);
$item=$editProductQueryResult=mysqli_fetch_assoc($editProductRunQuery);


  // Query for Category and Subcategory Name
  $queryForCategory="SELECT cat_name FROM category WHERE cat_code='".$item['cat_code']."'";
  $categoryName=mysqli_fetch_assoc(mysqli_query($connect,$queryForCategory));

  $queryForSubcategory="SELECT subcat_name FROM sub_category WHERE subcat_code='".$item['subcat_code']."'";
  $subcategoryName=mysqli_fetch_assoc(mysqli_query($connect,$queryForSubcategory));

/**=================================================
 * Query for edit Product data ENDS HERE
 * =================================================
 */
?>

    <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit Product</div>
      <div class="card-body">
        <!-- Categories<?php //echo $_SERVER['PHP_SELF']; ?> -->
        <form action="update_product.php" method="post" id="update_product_form">
        <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
          <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="cat_code" required="required">
                    <option value="<?php echo $item['cat_code']; ?>"><?php echo $categoryName['cat_name']; ?></option>
                </select>
          </div>
          <div class="form-group">
            <label for="exampleInputLastName">Sub Category</label>
            <select class="form-control" name="subcat" required="required">
                <option value="<?php echo $item['subcat_code']; ?>"><?php echo $subcategoryName['subcat_name']; ?></option>                  
            </select>
          </div>
          <!-- Product Name -->
          <div class="form-group">
            <label for="Product Name">Product Name</label>
            <input class="form-control" type="text" name="product_name" placeholder="Enter Product Name" value="<?php echo $item['product_name']; ?>" required="required">
          </div>
          <!-- Product Brand and MRP -->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Brand Name">Brand Name</label>
                <input class="form-control" type="text" name="brand" placeholder="Enter Brand Name" value="<?php echo $item['brand']; ?>" required="required">
              </div>
              <div class="col-md-6">
                <label for="MRP">MRP</label>
                <input class="form-control" type="number" name="mrp" placeholder="Enter MRP" value="<?php echo $item['mrp']; ?>" required="required">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="Product description">Product Description</label>
            <input class="form-control" type="text" name="product_desc" placeholder="Enter Product Description" value="<?php echo $item['product_desc']; ?>">
          </div>

           <div class="form-group">
            <label for="Pointers">Pointers</label>
            <textarea name="pointers" id="" cols="30" rows="10" class="form-control" placeholder="Enter Product Pointers"><?php echo $item['pointers']; ?></textarea>
          </div>

           <div class="form-group">
            <label for="Product Use">How to Use</label>
            <input class="form-control" type="text" name="product_use" placeholder="How To Use" value="<?php echo $item['product_use']; ?>">
          </div>
          <div class="form-group">
            <label for="url">Shop link</label>
            <input class="form-control" type="text" name="url" placeholder="Link to purchase the product" value="<?php echo $item['url']; ?>">
          </div>

          <input type="submit" name="update" value="Update" class="btn btn-primary btn-block">
        </form>
        
      </div>
    </div>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'admin_footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.js"></script>
    <script src="js/validate.js"></script>
  </div>
</body>

</html>
