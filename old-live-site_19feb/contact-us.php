<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="title" content="Eunomia Pharma Services, pharmacovigilance experts, regulatory specialists, and medical professionals .">
	<meta name="description" content="Call or visit us at any time; we make every effort to respond to all requests. ">
	<meta name="keywords" content="Eunomia Pharma Services, pharma services in uk, medicines, Specialists, medical induced drugs in uk, pharma services in woking, Pharmaceutical distribution in london, Drug safety usages in uk, Medication management in uk, medical," />
	<link rel="canonical" href="https://eunomiapharmaservices.com/" />
	<link rel="image_src" href="assets/images/socialmedia-image.jpg" />
	<meta property="og:title" content="Eunomia Pharma Services, pharmacovigilance experts, regulatory specialists, and medical professionals ."/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="https://eunomiapharmaservices.com/" />
	<meta property="og:image" content="assets/images/socialmedia-image.jpg"/>
	<meta property="og:site_name" content="Welcome to  Eunomia Pharma Services"/>
	<meta property="og:description" content="Call or visit us at any time; we make every effort to respond to all requests. "/>
	<meta name="twitter:card" value="summary" />
	 <meta name="twitter:site" value="@eunomia" />
	<meta property="twitter:url" content="https://eunomiapharmaservices.com/" />
	<meta property="twitter:title" content="Eunomia Pharma Services" />
	<meta property="twitter:description" content="Call or visit us at any time; we make every effort to respond to all requests. "/>
<title>Contact Us | EUNOMIA</title>
<?php include("includes/links.php"); ?>
<style>
.contact a {
	border-bottom: 1px;
	color:#000;
}



</style>
</head>
<body>
<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">
 <?php include("includes/header.php"); ?>

<!-- Page Title #2
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-gradient2">
	<div class="bg-section" >
		<img src="assets/images/contact-banner.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="title title-2 mb-70 text-center">
					<div class="title--content">
						<div class="title--heading">
							<h1>Contact Us</h1>
						</div>
						<div class="title--desc">
							<p>Call or visit us at any time;<br> we make every effort to respond to all requests.</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<!--	<li><a href="index.php">Home</a></li>
						<li class="active">Contact</li>
					</ol>-->
				</div><!-- .title end -->
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<div class="heading heading-2 mb-60 text--center">
					<!--<p class="heading--subtitle">Feel Free to</p>-->
					<h2 class="heading--title">Write to Us Anytime</h2>
					<div class="divider--line divider--center">
					</div>
				</div>
			</div><!-- .col-md-8 end -->
		</div><!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<div class="contact-form">
                <?php
if(isset($_POST['email'])) {
	$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: Eunomia Pharma Services   Contact Form <donotreplayeunomiapharmaservices.com />" . "\r\n" ;
	/* $email_to = $row_getusermail['email_address']; */
	$email_to = 'hello@eunomiapharmaservices.com';
	$subject = " Eunomia Pharma Services Contact Form ";
	$firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $phone = $_POST['phone']; 
	$email = $_POST['email'];
   

	$message = $_POST['message']; 
	
	
	$file = $uploadurl;
	$file = str_replace(' ', '%20', $file);
    $email_message .= "FirstName: ".($firstname)."\n";
    $email_message .= "Last Name: ".($lastname)."\n";
    $email_message .= "Telephone Number: ".($phone)."\n";
    $email_message .= "Email: ".($email)."\n"; 
    $email_message .= "message : ".($message)."\n";

//$headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email_to;
	// create email headers
	if (mail($email_to, $subject, $email_message)) {
		$form_result = "<center><h4><b>Thank you </b></h4><br>
						<p><strong>Email Successfully Sent!</strong></p><br>
						<p>Thank you for your enquiry! A member of our team will be in touch with you soon.</p></center>";
	}
	else{
		$form_result = "<br><br><br>ERROR!! <br>Please check the all field are valid!<b><br><br>";
		
	}
	echo $form_result;
	
}
else {
	
?>
   
    <form method="post" action="" id="contactform" class="form-horizontal" onSubmit="return vcontactform()">
              
    <div class="row">
    <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="last Name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your phone no" required>
                </div>
              
               
			  <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
    </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="2" placeholder="Message"  id="message" required></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" id="submit" class="btn btn--secondary btn--block">Send Message</button></div>
            </form>
            <?php } ?>
				</div>
			</div><!-- .col-md-6 end -->
		</div>
	</div>
</section>
<!-- #contact1 end -->

<!-- Contact
============================================= -->
<section id="contact" class="contact pb-0 pt-0">
	<div class="container-fluid pr-0 pl-0">
		<div class="row">
			<div class="col-xs-12  col-sm-12  col-md-12 pr-0 pl-0">
		
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4287.453548942841!2d-0.6126004695365018!3d51.298094891158605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875d6fc179ee97b%3A0x820b86832100331e!2sHeath%20House%20Rd%2C%20Brookwood%2C%20Woking%20GU22%200QU%2C%20UK!5e0!3m2!1sen!2sin!4v1690456890401!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
	
							<div class="fluid-container">
		<div class="row">
			<div class="clearfix"></div>
			<!-- Contact Panel #1 -->   
			<div class="col-xs-12 col-sm-6 col-md-3 contact-panel">
				<i class="lnr lnr-map-marker"></i>
				<h3>Our Address</h3>
				<p><b>EUNOMIA Pharma Service</b><br>Rough Way,<br> Woking,<br> United Kingdom, GU22 0QU</p>
			
			</div><!-- .col-md-4 end -->
			<!-- Contact Panel #2 -->
			<div class="col-xs-12 col-sm-6 col-md-2 contact-panel" style="padding: 61px 29px;">
				<i class="lnr lnr-phone-handset"></i>
				<h3>Our Phone</h3>
				<p>+44 7584 567018</p>
				<a class="contact-action" href="tel:+44 7584 567018">Call Us</a>
			<br>
			</div><!-- .col-md-4 end -->
			<!-- Contact Panel #3 -->
			<div class="col-xs-12 col-sm-6 col-md-4 contact-panel" style="padding: 61px 29px;">
				<i class="lnr lnr-envelope"></i>
				<h3>Our Email</h3>
				<p> hello@eunomiapharmaservices.com</p>
				<a class="contact-action" href="mailto:hello@eunomiapharmaservices.com">Send a Message</a>
			<br>
			</div><!-- .col-md-4 end -->
			<!-- Contact Panel #4 -->
			<div class="col-xs-12 col-sm-6 col-md-3 contact-panel">
				<i class="lnr lnr-users"></i>
				<h3>Our Support</h3>
				<p>Have a Requirements?</p>
				<a class="contact-action" href="contact.php">CONTACT US</a>
			</div><!-- .col-md-4 end -->
		</div><!-- .row end -->
	</div>
</section><!-- #contact end -->

 	<?php include("includes/footer.php"); ?>
 </div><!-- #wrapper end -->
<?php include("includes/script.php"); ?>
</body>
</html>

<style>
    .contact-panel {
      
        padding: 62px 10px 0px 10px;
    min-height: 353px;
    }
</style>