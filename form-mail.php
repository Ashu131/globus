<?php
$msg="";
if (isset($_POST['submit']) && !empty($_POST['submit']))
   {
      $name=$_POST['name'];
      $mobile=$_POST['mobile'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      
$to = "mkt.globus@gmail.com,glyphformulations@gmail.com";
$subject = "Someone Query on your Website globusremedies.com";

$message = "<b>Name:".$name."</b>";
$message.= "<b>Mobile:".$mobile."</b>";
$message.= "<b>Email:".$email."</b>";
$message.= "<b>Message:".$message."</b>";


$header = "From: ".$email."\r\n";
$header .= "Cc:amit.khare@yocreativ.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
header("Refresh: 5; url=index.php");
$msg="Enquiry sent successfully !...";
}else {
header("Refresh: 5; url=index.php");
$msg="Error ! Try again...";
}
}
?>