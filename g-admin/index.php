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
  <title>Globus Admin Panel</title>
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
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Products Report</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Brand</th>
                  <th>MRP</th>
                  <th>Description</th>
                  <th>Pointers</th>
                  <th>Uses</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
<?php
  // $dataqry="SELECT *, category.cat_name, sub_category.subcat_name FROM products JOIN category ON $product_tbl.cat_code=$cat_tbl.cat_code JOIN $subcat_tbl ON $product_tbl.subcat_code=$subcat_tbl.subcat_code";
  $dataqry="SELECT * FROM products ORDER BY ID ASC";
  $datarun= mysqli_query($connect,$dataqry);
while ( $dataresult= mysqli_fetch_array($datarun)) {
/**=================================================
 * Query for edit Product data STARTS HERE
 * =================================================
 */
  // Query for Category and Subcategory Name
  $queryForCategory="SELECT cat_name FROM category WHERE cat_code='".$dataresult['cat_code']."'";
  $categoryName=mysqli_fetch_assoc(mysqli_query($connect,$queryForCategory));

  $queryForSubcategory="SELECT subcat_name FROM sub_category WHERE subcat_code='".$dataresult['subcat_code']."'";
  $subcategoryName=mysqli_fetch_assoc(mysqli_query($connect,$queryForSubcategory));

/**=================================================
 * Query for edit Product data ENDS HERE
 * =================================================
 */

  echo "<tr><td><a href='edit_product.php?id=".$dataresult['id']."'>".$dataresult['product_name']."</a></td>";
  echo "<td>".$dataresult['brand']."</td>";
  echo "<td>".$dataresult['mrp']."</td>";
  echo "<td>".$dataresult['product_desc']."</td>";
  echo "<td>".$dataresult['pointers']."</td>";
  echo "<td>".$dataresult['product_use']."</td>";
  echo "<td>".$categoryName['cat_name']."</td>";
  echo "<td>".$subcategoryName['subcat_name']."</td>";
  echo "<td><a href='delete_product.php?id=".$dataresult["id"]."'>".$dataresult['id']."</a></td>";  
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
  </div>
</body>

</html>
