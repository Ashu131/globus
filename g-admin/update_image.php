<?php 

session_start();
include 'config.php';
try {
	if (!isset($_SESSION['globus-admin'])) {
		header('location:index.php');
		die();
	}
} catch (Exception $e) {
	echo $e;
}

// ------------------
// Start Image 1 Upload
if(isset($_FILES['image1'])){
  	$file_name1 = $_FILES['image1']['name'];
  	$file_size =$_FILES['image1']['size'];
  	$file_tmp =$_FILES['image1']['tmp_name'];
  	$file_type=$_FILES['image1']['type'];
  	$id=$_POST['product_id'];
    
    $move=move_uploaded_file($file_tmp,"images/".$file_name1);
    if ($move) {
      	$showQuery="UPDATE products SET image1='$file_name1' WHERE id='$id'";
		$showRun=mysqli_query($connect,$showQuery);
		
      }  
	if ($showRun) {
	    echo "<script>window.location='update_image_index.php'</script>";
	    
	} else {
	    echo "<script>window.location='update_image_index.php?message=something wrong'</script>";
	}
}


// ------------------
// Start Image 2 Upload
if(isset($_FILES['image2'])){
  	$file_name1 = $_FILES['image2']['name'];
  	$file_size =$_FILES['image2']['size'];
  	$file_tmp =$_FILES['image2']['tmp_name'];
  	$file_type=$_FILES['image2']['type'];
  	$id=$_POST['product_id'];
    
    $move=move_uploaded_file($file_tmp,"images/".$file_name1);
    if ($move) {
      	$showQuery="UPDATE products SET image2='$file_name1' WHERE id='$id'";
		$showRun=mysqli_query($connect,$showQuery);
		
      }  
	if ($showRun) {
	    echo "<script>window.location='update_image_index.php'</script>";
	    
	} else {
	    echo "<script>window.location='update_image_index.php?message=something wrong'</script>";
	}
}


// ------------------
// Start Image 3 Upload
if(isset($_FILES['image3'])){
  	$file_name1 = $_FILES['image3']['name'];
  	$file_size =$_FILES['image3']['size'];
  	$file_tmp =$_FILES['image3']['tmp_name'];
  	$file_type=$_FILES['image3']['type'];
  	$id=$_POST['product_id'];
    
    $move=move_uploaded_file($file_tmp,"images/".$file_name1);
    if ($move) {
      	$showQuery="UPDATE products SET image3='$file_name1' WHERE id='$id'";
		$showRun=mysqli_query($connect,$showQuery);
		
      }  
	if ($showRun) {
	    echo "<script>window.location='update_image_index.php'</script>";
	    
	} else {
	    echo "<script>window.location='update_image_index.php?message=something wrong'</script>";
	}
}


// ------------------
// Start Image 4 Upload
if(isset($_FILES['image4'])){
  	$file_name1 = $_FILES['image4']['name'];
  	$file_size =$_FILES['image4']['size'];
  	$file_tmp =$_FILES['image4']['tmp_name'];
  	$file_type=$_FILES['image4']['type'];
  	$id=$_POST['product_id'];
    
    $move=move_uploaded_file($file_tmp,"images/".$file_name1);
    if ($move) {
      	$showQuery="UPDATE products SET image4='$file_name1' WHERE id='$id'";
		$showRun=mysqli_query($connect,$showQuery);
		
      }  
	if ($showRun) {
	    echo "<script>window.location='update_image_index.php'</script>";
	    
	} else {
	    echo "<script>window.location='update_image_index.php?message=something wrong'</script>";
	}
}


// ------------------
// Start Image 5 Upload
if(isset($_FILES['image5'])){
  	$file_name1 = $_FILES['image5']['name'];
  	$file_size =$_FILES['image5']['size'];
  	$file_tmp =$_FILES['image5']['tmp_name'];
  	$file_type=$_FILES['image5']['type'];
  	$id=$_POST['product_id'];
    
    $move=move_uploaded_file($file_tmp,"images/".$file_name1);
    if ($move) {
      	$showQuery="UPDATE products SET image5='$file_name1' WHERE id='$id'";
		$showRun=mysqli_query($connect,$showQuery);
		
      }  
	if ($showRun) {
	    echo "<script>window.location='update_image_index.php'</script>";
	    
	} else {
	    echo "<script>window.location='update_image_index.php?message=something wrong'</script>";
	}
}





 ?>