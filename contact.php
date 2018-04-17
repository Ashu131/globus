	 <div class="contact" id="contact">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Contact</h3>
		</div>
		<div class="contact-top-grids">
			<div class="col-md-6 contact-left-">
				<div class="left-top">
					<h4>Contact information</h4>
					<p><i class="fa fa-calendar" aria-hidden="true"></i><strong>Monday - Friday <span class="dot">:</span></strong>9:30 AM to 6:30 PM</p>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i><strong class="p">address <span class="dot1">:</span></strong>14/11/2, Site-4, Industrial Area<span class="pull-right">Sahibabad, Ghaziabad (U.P.) 201010<span></p>
					<div class="clearfix"></div>
					<p><i class="fa fa-phone" aria-hidden="true"></i><strong class="p1">phone <span class="dot2">:</span></strong>+91-120-4217614-17</p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i><strong class="p2">email <span class="dot3">:</span></strong><a href="mailto:info@example.com">mkt.globus@gmail.com</a></p>
				</div>
				<div class="left-bottom">
					<h4>Follow Us</h4>
					<p>Feel free to reach us for any medical service required. Say Hi on social media too.</p>
					<div class="right-w3l fotw3">
						<ul class="top-links">
							<li><a href="https://www.facebook.com/GLOBUSREMEDIESLTD/" target="_blnak"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/GlobusRemedies" target="_blnak"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://plus.google.com/+GlobusRemedies" target="_blnak"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.linkedin.com/in/globusremedies/" target="_blnak"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
			<div class="col-md-6 contact-right">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28011.106089333454!2d77.3482661!3d28.6480911!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a09eb5a2beeb374!2sGlobus+Remedies!5e0!3m2!1sen!2s!4v1505214017611" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="contact-w3ls">
<form method="post" enctype="multipart/form-data">
				
					<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email"  class="email" name="email" placeholder="Email" required="">
						<input type="text" name="mobile" placeholder="Mobile Number" required="" maxlength="10" >
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" name="contact_submit" value="Submit">
					</div>
					<div class="clearfix"> </div> 
				</form>
			</div>  

	</div>
</div>

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

  $to = "healthcaresuccess4sure@gmail.com";//<== update the email address
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
   $headers .= "Cc: mkt.globus@gmail.com \r\n";
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
