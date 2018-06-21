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

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Globus Admin Panel | Update Product Image</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include 'admin_nav.php' ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Dashboard
        </li>
        <li class="breadcrumb-item active">Update Images</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Products Images Report  |  <span> If the Image is above 2MB the system will not work. Use <a href="http://optimizilla.com/" target="_blank">Optimizilla</a> to reduce the size below 200KB.</span></div>
          <p></p>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Image1</th>
                  <th>Image2</th>
                  <th>Image3</th>
                  <th>Image4</th>
                  <th>Image5</th>
                </tr>
              </thead>
              <tbody>
<?php
  
/**=================================================
 * Query for Updating Images data STARTS HERE
 * =================================================
 */
  
  $dataqry="SELECT * FROM products ORDER BY ID ASC";
  $datarun= mysqli_query($connect,$dataqry);

/**=================================================
 * Query for Updating Images data ENDS HERE
 * =================================================
 */
while ( $dataresult= mysqli_fetch_array($datarun)) {

  echo "<tr class='product_update_img'><td><a href='edit_product.php?id=".$dataresult['id']."'>".$dataresult['product_name']."</a></td>";

?>
  <td>
    <img class='img-responsive' src='images/<?php echo $dataresult["image1"]; ?>'><br>
    <?php echo $dataresult['image1']; ?>
      <form action="update_image.php" method="POST" enctype="multipart/form-data" id="update_product_image1">
        <input type='file' name='image1'>
        <input type="hidden" name='product_id' value="<?php echo $dataresult['id']; ?>">
        <input type='submit' class='btn btn-default' name="image1">
      </form>
  </td>
  <td>
    <img class='img-responsive' src='images/<?php echo $dataresult["image2"]; ?>'><br>
      <?php echo $dataresult['image2']; ?>
      <form action="update_image.php" method="POST" enctype="multipart/form-data" id="update_product_image">
        <input type='file' name='image2'>
        <input type="hidden" name='product_id' value="<?php echo $dataresult['id']; ?>">
        <input type='submit' class='btn btn-default' name="image2">
      </form>
  </td>
  <td>
    <img class='img-responsive' src='images/<?php echo $dataresult["image3"]; ?>'><br>
      <?php echo $dataresult['image3']; ?>
      <form action="update_image.php" method="POST" enctype="multipart/form-data" id="update_product_image">
        <input type='file' name='image3'>
        <input type="hidden" name='product_id' value="<?php echo $dataresult['id']; ?>">
        <input type='submit' class='btn btn-default' name="image3">
      </form>
  </td>
  <td>
    <img class='img-responsive' src='images/<?php echo $dataresult["image4"]; ?>'><br>
      <?php echo $dataresult['image4']; ?>
      <form action="update_image.php" method="POST" enctype="multipart/form-data" id="update_product_image">
        <input type='file' name='image4'>
        <input type="hidden" name='product_id' value="<?php echo $dataresult['id']; ?>">
        <input type='submit' class='btn btn-default' name="image4">
      </form>
  </td>
  <td>
    <img class='img-responsive' src='images/<?php echo $dataresult["image5"]; ?>'><br>
      <?php echo $dataresult['image5']; ?>
      <form action="update_image.php" method="POST" enctype="multipart/form-data" id="update_product_image">
        <input type='file' name='image5'>
        <input type="hidden" name='product_id' value="<?php echo $dataresult['id']; ?>">
        <input type='submit' class='btn btn-default' name="image5">
      </form>
  </td>
  

<?php
  echo "</tr>";
}

?>
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/validate.js"></script>
  </div>
</body>

</html>
