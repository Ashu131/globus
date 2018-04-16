<?php 
  session_start();
  include 'config.php';
  try {
    if (!isset($_SESSION['globus-admin'])) {

      header('Location:login.php');
    }
  } catch (Exception $e) {
    echo $e;
  }


  if (isset($_POST['submit'])) {
    $product_name   = $_POST['name'];
    $brand          = $_POST['brand'];
    $mrp            = $_POST['mrp'];
    $desc           = $_POST['desc'];
    $pointers       = $_POST['pointers'];
    $use            = $_POST['use'];
    $catcode        = $_POST['cat_code'];
    $subcat         = $_POST['subcat'];
    $link           = $_POST['link'];



   if(isset($_FILES['image1'])){
      $errors= array();
      $file_name1 = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      if($file_size > 2997152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name1);
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['image2'])){
      $errors= array();
      $file_name2 = $_FILES['image2']['name'];
      $file_size =$_FILES['image2']['size'];
      $file_tmp =$_FILES['image2']['tmp_name'];
      $file_type=$_FILES['image2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      if($file_size > 2997152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name2);
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['image3'])){
      $errors= array();
      $file_name3 = $_FILES['image3']['name'];
      $file_size =$_FILES['image3']['size'];
      $file_tmp =$_FILES['image3']['tmp_name'];
      $file_type=$_FILES['image3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image3']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      if($file_size > 2997152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name3);
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['image4'])){
      $errors= array();
      $file_name4 = $_FILES['image4']['name'];
      $file_size =$_FILES['image4']['size'];
      $file_tmp =$_FILES['image4']['tmp_name'];
      $file_type=$_FILES['image4']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image4']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      if($file_size > 2997152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name4);
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['image5'])){
      $errors= array();
      $file_name5 = $_FILES['image5']['name'];
      $file_size =$_FILES['image5']['size'];
      $file_tmp =$_FILES['image5']['tmp_name'];
      $file_type=$_FILES['image5']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image5']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      // if(in_array($file_ext,$expensions)=== false){
      //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      // }
      
      if($file_size > 2997152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name5);
      }else{
         print_r($errors);
      }
   }

  $addqry="INSERT into products(product_name, brand, mrp, product_desc, pointers, product_use, cat_code, subcat_code, url, image1, image2, image3, image4, image5) 
  VALUES('$product_name','$brand', '$mrp', '$desc','$pointers', '$use', '$catcode', '$subcat', '$link', '$file_name1', '$file_name2', '$file_name3', '$file_name4', '$file_name5')";
  $addrun= mysqli_query($connect, $addqry);
  if ($addrun) {
    echo "Record Inserted";
  }else{
    echo "Record not Inserted";
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
  <title>Add Product</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php  include 'admin_nav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Dashboard
        </li>
        <li class="breadcrumb-item active">Add Product</li>
      </ol>
      
    </div>
    <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Product</div>
      <div class="card-body">
        
        <form method="get">

          <!-- Categories -->
          <div class="form-group">
            <div class="form-row">
              
                <label for="category">Category</label>
                <select class="form-control" name="cat_select" onchange="this.form.submit()">
                  <option>Select</option>
                  <?php 
                    $catqry= "SELECT * FROM category";
            $run= mysqli_query($connect, $catqry);
            
  while ($result= mysqli_fetch_assoc($run)) {?>
    <option value="<?php echo $result['cat_code']; ?>" <?php if (isset($_GET['cat_select'])) {
                                               if ($_GET['cat_select']==$result['cat_code']) {
                                                 echo "selected"; 
                                                                                              } 
                                                                                              } ?> 
      ><?php echo ucfirst($result['cat_name']); ?>
        
    </option>
  <?php }?>
                    
                
                </select>
              </div>
            
          </div>
        </form>
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="cat_code" value="<?php echo $_GET['cat_select']; ?>">
          
          <div class="form-group">
                <label for="exampleInputLastName">Sub Category</label>
                <select class="form-control" name="subcat">
                  <option>Select</option>
        <?php 

          $query="SELECT subcat_name, subcat_code FROM sub_category WHERE cat_code = '".$_GET['cat_select']."' ";
          $run= mysqli_query($connect,$query);
          while ($row=mysqli_fetch_assoc($run)) {
            echo "<option value='".$row['subcat_code']."'>".ucfirst($row['subcat_name'])."</option>";
          }

         ?>
                   
                </select>
              </div>
              
          <!-- Product Name -->
          <div class="form-group">
            <label for="Product Name">Product Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter Product Name">
          </div>
          <!-- Product Brand and MRP -->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="Brand Name">Brand Name</label>
                <input class="form-control" type="text" name="brand" placeholder="Enter Brand Name">
              </div>
              <div class="col-md-6">
                <label for="MRP">MRP</label>
                <input class="form-control" type="number" name="mrp" placeholder="Enter MRP">
              </div>
            </div>
          </div>

           <div class="form-group">
            <label for="Product description">Product Description</label>
            <input class="form-control" type="text" name="desc" placeholder="Enter Product Description">
          </div>

           <div class="form-group">
            <label for="Pointers">Pointers</label>
            <input class="form-control" type="text" name="pointers" placeholder="Enter Product Pointers">
          </div>

           <div class="form-group">
            <label for="Product Use">How to Use</label>
            <input class="form-control" type="text" name="use" placeholder="How To Use">
          </div>
          <div class="form-group">
            <label for="url">Shop link</label>
            <input class="form-control" type="text" name="link" placeholder="Link to purchase the product">
          </div>

          <div class="form-group">
            <label for="Images">Images</label>
            <input class="form-control" type="file" name="image1">
            <input class="form-control" type="file" name="image2">
            <input class="form-control" type="file" name="image3">
            <input class="form-control" type="file" name="image4">
            <input class="form-control" type="file" name="image5">
            
          </div>

          <input type="submit" name="submit" value="Add Product" class="btn btn-primary btn-block">
        </form>
             
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
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
  </div>
</body>

</html>
