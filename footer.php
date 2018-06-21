<?php 

if (isset($_POST['contact_submit'])) {
 	$name              = $_POST['name'];
    $visitor_email     = $_POST['email'];
    $phone             = $_POST['mobile'];
    $message           = $_POST['message'];
    $filled_date	   =date('Y-m-d H:i:s');
  $addqry="INSERT INTO form_filled (id, name, email, phone, message, filled_date) VALUES (NULL, '$name', '$visitor_email', '$phone', '$message','$filled_date')";
  $addrun= mysqli_query($connect, $addqry);
  if ($addrun) {

  $email_from = $visitor_email;
  //<== update the email address
  $email_subject = "Form Submission";
  $email_body = "You have received a new message from the user ".$name."\n".
  "User's contact details are ".$phone." and ".$visitor_email."\n".
  "Here is the message:\n".$message."";

  $to = "mkt.globus@gmail.com";//<== update the email address
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  $headers .= "Cc: yatinder.kataria@yocreativ.com \r\n";
  $headers .= "Bcc: amit.khare@yocreativ.com \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.

echo '<script>window.alert("Thank-you. Your message successfully submitted");window.location.href="index.php";</script>';
}
else{
  echo '<script>window.alert("record not inserted");window.location.href="index.php";</script>';
  }
}
?>

<!-- START CONTACT SECTION -->
<div class="contact-section" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="title-section white-title">
                <h1>GET I<span>N T</span>OUCH</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInLeft animated" data-wow-delay="0.2s">
                <div class="contact-content left-content" itemscope>
                    <div class="logo-title">
                        <h1><span>G</span>lobus <span>R</span>emedies L<span>.</span>T<span>.</span>D<span>.</span></h1>
                    </div>
                    <p>
						<span itemprop="Address">
							14/11/2, Site-4, Industrial Area Sahibabad, Ghaziabad (U.P.) 
							<span itemprop="postalCode">201010</span>
						</span>
					</p>
                    <div class="contact-info">
                        <p>
							<b>Phone: </b><span itemprop="telephone">+91-120-4217614-17, 8744055830, 9911338489</span>
						</p>
                        <p>
							<b>Email: </b><span itemprop="email">mkt.globus@gmail.com</span>
						</p>
                    </div>
                    <div class="footer-social-media">
                        <ul>
                            <li>
								<a itemprop="url" target="_blank" href="https://www.facebook.com/GLOBUSREMEDIESLTD/">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
                            <li>
								<a itemprop="url" target="_blank" href="https://twitter.com/GlobusRemedies">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
                            <li>
								<a itemprop="url" target="_blank" href="https://plus.google.com/+GlobusRemedies">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
                            <li>
								<a itemprop="url" target="_blank" href="https://www.linkedin.com/in/globusremedies/">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
                        </ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 wow fadeInDown animated" data-wow-delay="0.2s">
				<div class="widget">
					<h3 class="headline">Important Links</h3>
					<div class="widget-item">
						<ul>
							<li><a href="manufacturing.php">Manufacturing</a></li>
							<li><a href="franchise.php">Franchise</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="http://globusremedies.com/blog/">Blogs</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="contact-area">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="form-group col-lg-4 wow fadeInDown animated" data-wow-delay="0.2s" >
							<span class="text-danger"></span>
							<input type="text" name="name" class="form-control" id="name" placeholder="NAME" required="required">
						</div>
						<div class="form-group col-lg-4 wow fadeInDown animated" data-wow-delay="0.2s">
							<span class="text-danger"></span>
							<input type="email" name="email" class="form-control" id="email" placeholder="EMAIL" required="required">
						</div>
						<div class="form-group col-lg-4 wow fadeInDown animated" data-wow-delay="0.2s">
							<input type="tel" name="mobile" class="form-control" id="subject" placeholder="PHONE" pattern="^\d{3}\d{3}\d{4}$" required="required">
						</div>
						<div class="form-group col-lg-12 wow fadeInDown animated" data-wow-delay="0.2s">
							<textarea  name="message" id="message" cols="30" rows="5" placeholder="MESSAGE" required="required"></textarea>                              
							<span class="text-danger"></span>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<button type="submit" class="btn contact-submit" name="contact_submit">SEND</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>