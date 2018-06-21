<?php include 'head.php';
		include 'g-admin/config.php';
		// echo $product_tbl;
		$prod_qry="";
?>
<body>
<?php include 'navbar.php'; ?>

<div class="P-laboratories" id="laboratories">
    <div class="w3l-about w3l-gallery">
        <div class="container">
            <div class="w3ls-heading">
                <?php
               
               	$titleqry="SELECT subcat_name FROM sub_category WHERE subcat_code='".$_GET['subcat_code']."'";
                $titlerun= mysqli_query($connect, $titleqry);
                $titlerslt= mysqli_fetch_assoc($titlerun);
                ?>
                <h3 style="margin-top: 80px"><?php echo $titlerslt['subcat_name']; ?></h3>
            </div>
            <div class="gallery-grids">
                <?php 
                	$proqry="SELECT * FROM $product_tbl WHERE `show-hide`=1 AND subcat_code='".$_GET['subcat_code']."' ";
                	$prorun= mysqli_query($connect, $proqry);
                	
                	while ( $proresult= mysqli_fetch_assoc($prorun)) {?>
                		
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="g-admin/images/<?php echo $proresult['image1']; ?>" data-lightbox="example-set" data-title="">
                                <img src="g-admin/images/<?php echo $proresult['image1']; ?>" alt="" height="250px" width="auto">
                                <br>
                                <p><?php echo $proresult['product_name']; ?></p>
                                <p><a href="<?php echo $proresult['url']; ?>" target="_blank"><button>Buy Now</button></a> <a href="product-description.php?info=<?php echo $proresult['id']; ?>" target="_blank"><button>More Info</button></a></p>
                            </a>
                        </figure>
                    </div>
                </div>
                <?php } ?>
                <div class="clearfix"> </div>
                
                <script src="js/lightbox-plus-jquery.min.js"> </script>
            </div>
        </div>
    </div>
</div>

<?php
// include 'footer.php';
include 'script.php';
?>
</body>
</html>