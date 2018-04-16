<?php include 'head.php';
require 'g-admin/config.php';
try {
    if ($_GET['info']=='') {

        header('Location:products.php');

    }
} catch (Exception $e) {
     
     echo $e;
}
$reteive = mysqli_query($connect,"SELECT * FROM products WHERE id = '".$_GET['info']."' " );
$result= mysqli_fetch_assoc($reteive);
 ?>
<body>
<?php include 'navbar.php'; ?>

<div class="P-laboratories" id="laboratories">
        <div class="w3l-about w3l-gallery">
            <div class="container">
                <div class="w3ls-heading">
                    <h3 style="margin-top: 50px"><?php echo $result['product_name']; ?></h3>
                    <br>
                     
                     <div class="container">
                    <div class="row">   
                    <div class="col-md-6">
                    <div class="col-md-12">
                    <div class="xzoom-container">
                        <?php if(!empty($result['image1'])){?>
                      <img class="xzoom" id="xzoom-default" src="g-admin/images/<?php echo $result['image1']; ?>" xoriginal="g-admin/images/<?php echo $result['image1']; ?>" title="<?php echo $result['product_name']; ?>" width="440px" height="auto"/>
                        <?php } ?>
                      <div class="xzoom-thumbs" style="margin-top: 10px;">
                        <?php if(!empty($result['image1'])){?>
                        <a href="g-admin/images/<?php echo $result['image1']; ?>"><img class="xzoom-gallery" width="80" src="g-admin/images/<?php echo $result['image1']; ?>" xpreview="g-admin/images/<?php echo $result['image1']; ?>" title="<?php echo $result['product_name']; ?>"></a>
                        <?php } ?>
                        <?php if(!empty($result['image2'])){?>
                        <a href="g-admin/images/<?php echo $result['image2']; ?>"><img class="xzoom-gallery" width="80" src="g-admin/images/<?php echo $result['image2']; ?>" title="<?php echo $result['product_name']; ?>"></a>
                        <?php } ?>
                        <?php if(!empty($result['image3'])){?>
                        <a href="g-admin/images/<?php echo $result['image3']; ?>"><img class="xzoom-gallery" width="80" src="g-admin/images/<?php echo $result['image3']; ?>" title="<?php echo $result['product_name']; ?>"></a>
                        <?php } ?>
                        <?php if(!empty($result['image4'])){?>
                        <a href="g-admin/images/<?php echo $result['image4']; ?>"><img class="xzoom-gallery" width="80" src="g-admin/images/<?php echo $result['image4']; ?>" title="<?php echo $result['product_name']; ?>"></a>
                        <?php } ?>
                        <?php if(!empty($result['image5'])){?>
                        <a href="g-admin/images/<?php echo $result['image5']; ?>"><img class="xzoom-gallery" width="80" src="g-admin/images/<?php echo $result['image5']; ?>" title="<?php echo $result['product_name']; ?>"></a>
                        <?php } ?>

                      </div>
                     <div class="shop-btn">
                    <a target="_blank" href="<?php echo $result['url']; ?>"><button>Buy Now</button></a>
                    </div>  
                    </div>
                    </div> 

                    <!-- <div class="col-md-12">
                        <div class="descrip sales-info-9">
                        <h3>How to use</h3>
                    </div>
                    <div class="descrip-text descrip-tex-4">
                    <p>Rub Globus Aloe Vera face wash on your face and neck with your fingers for a couple of minutes and rinse it off.</p>
                    </div>
                    </div> -->
                    </div>
                    <div class="col-md-6">
                    <div class="col-sm-12">
                    <div class=" descrip sales-info-2">
                    <h3>Product Description</h3>
                    </div>
                    <div class="descrip-text descrip-tex-1">
                    <p><?php echo $result['product_desc']; ?></p>
                    </div>
                    </div>
                    <div class="col-sm-12">
                    <div class=" descrip sales-info-3">
                    <h3>Important Points</h3>
                    </div>
                    <div class="descrip-text descrip-tex-2">
                    <p><?php echo $result['pointers']; ?></p>
                    </div>
                    </div>
                    <div class="col-sm-12">
                    <div class=" descrip sales-info-4">
                    <h3>How to Use</h3>
                    </div>
                    <div class="descrip-text descrip-tex-3">
                    <p><?php echo $result['product_use']; ?><br><br></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
 </div>
 
<?php
include 'footer.php';
include 'script.php';
?>
<script src="dist/js/foundation.min.js"></script>
<script src="dist/js/setup.js"></script>
</body>
</html>