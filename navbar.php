<!-- header -->
<div class="header-w3layouts">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top container-fluid">
		<div class="row right-w3l">
			<div class="col-sm-4">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#home">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php"><img src="images/icons/new.png" class="img-responsive"></a></h1>
				</div>
			</div>
			<div class="col-sm-8">
				<ul class="nav navbar-nav navbar-right cl-effect-15 top-links">
					<li><a target="_blank" href="https://www.facebook.com/GLOBUSREMEDIESLTD/"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/GlobusRemedies"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://plus.google.com/+GlobusRemedies"><i class="fa fa-google-plus"></i></a></li>
					<li><a target="_blank" href="https://www.instagram.com/globusgroups/"><i class="fa fa-instagram"></i></a></li>
					<li><a target="_blank" href="https://www.linkedin.com/in/globusremedies/"><i class="fa fa-linkedin"></i></a></li>
					<li><a target="_blank" href="https://in.pinterest.com/globusremedies/"><i class="fa fa-pinterest-p"></i></a></li>
				</ul>
			</div>
			</div>
		</nav>
	</div>
	<div class="container menus collapse navbar-collapse" id="home" style="margin-top: 83px">
		<div class="row">
			<div class="col-sm-2 text-center navpad" id="navhome"><a href="index.php" class="white">Home</a></div>
			<div class="col-sm-2 text-center navpad" id="navabout"><a href="aboutus.php" class="white">About Us</a></div>
			<div class="col-sm-2 text-center navpad" id="navblog"><a href="blog" class="white">Blogs</a></div>
			<div class="col-sm-2 text-center navpad" id="navproduct"><a data-toggle="tab" href="#products" class="white">Products</a></div>
			<div class="col-sm-2 text-center navpad" id="navcontact"><a href="index.php#contact" class="white">Contact</a></div>
			<div class="col-sm-2 text-center navpad" id="navtestimonials"><a href="index.php#testimonials" class="white">Testimonials</a></div>
			<div class="col-sm-2 text-center navpad" id="navtestimonials"><a href="manufacturing.php" class="white">Manufacturing</a></div>
			<div class="col-sm-2 text-center navpad" id="navtestimonials"><a href="franchise.php" class="white">Franchise</a></div>
			
		</div>
		<script>
			$(document).ready(function(){
				$('#products div div a').click(function(){
					$('#products div div a').removeAttr('style');
					$(this).css({"font-weight":"bold","color":"black"});
				});
			});
		</script>
		<div class="tab-content ">
			<div id="products" class="tab-pane fade">
				<div class="row">
					<div class="col-sm-2 text-center navpad productcat"><a data-toggle='tab' href='#513' class="white">Allopathic</a></div>
					<div class="col-sm-2 text-center navpad productcat"><a data-toggle='tab' href='#512' class="white">Ayurveda</a></div>
					<div class="col-sm-2 text-center navpad productcat"><a data-toggle='tab' href='#511' class="white">Beauty / Wellness</a></div>
					<div class="col-sm-2 text-center navpad productcat"><a data-toggle='tab' href='#510' class="white">Nutraceuticals</a></div>
				</div>
			</div>
		</div>
		<div class="tab-content ">
			<div id="513" class="tab-pane fade">
				<div class="row subcat_background">
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub001" class="subcat_color">Antibiotic</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub002" class="subcat_color">Gastraintestinal</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub003" class="subcat_color">Analgesic / Anti-Inflammatory</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub004" class="subcat_color">Anticold / Anticough</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub005" class="subcat_color">Speciality Division</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub006" class="subcat_color">Gynecology</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub007" class="subcat_color">Others</a></div>
				</div>
			</div>
			
			<div id="512" class="tab-pane fade">
				<div class="row subcat_background">
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub008" class="subcat_color">Hepato Protective</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub009" class="subcat_color">Renal Care</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub010" class="subcat_color">Piles</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub011" class="subcat_color">Baby Care</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub012" class="subcat_color">Pain Management</a></div>
				</div>
			</div>
			
			<div id="511" class="tab-pane fade">
				<div class="row subcat_background">
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub013" class="subcat_color">Face Care</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub014" class="subcat_color">Hair Care</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub015" class="subcat_color">Body Care</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub016" class="subcat_color">Personal &#38; Intimate Care</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub018" class="subcat_color">Analgesic / Anti-Inflannatory</a></div>
					
				</div>
			</div>
			<div id="510" class="tab-pane fade">
				<div class="row subcat_background">
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub019" class="subcat_color">Antioxidants, Vitamins, & Supplements</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub020" class="subcat_color">Iron</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub021" class="subcat_color">Calcium</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub022" class="subcat_color">Protien Supplement</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub023" class="subcat_color">Enzymes</a></div>
					<div class="col-sm-2 text-center navpad"><a href="products.php?subcat_code=sub024" class="subcat_color">Enerzy Drinks</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>