<?php
if(isset($_POST['submit'])) 
{

$message=
'
Full Name:	'.$_POST['fullname'].'<br />
Email:	'.$_POST['emailid'].'<br />
';
 //Phone:	'.$_POST['phone'].'<br />
 //Comments:	'.$_POST['comments'].'
 require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = 'ssl';     // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port Options: Port 25, 465, or 587
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "sawedssha@gmail.com"; // Your full Gmail address
    $mail->Password   = "feb052018"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("sssabrsh@gmail.com", "Sabareesh"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sabareesh Weds Sharmili</title>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		<div class="fh5co-hero" data-section="home">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="display-t">
					<div class="display-tc">
						<div class="container">
							<div class="col-md-10 col-md-offset-1">
								<div class="animate-box">
									<h1>The Wedding</h1>
									<h2>Sabareesh &amp; Sharmili</h2>
									<p><span>05.02.2018</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Sa&mdash;Sha</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html" >Home</a></li>							
							<li><a href="groom-bride.html" class="fh5co-sub-ddown">Meet Us</a></li>
							<li><a href="guest.html">Events</a></li>
							<li><a href="when-where.html">When &amp; Where</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
		
		<div id="fh5co-couple" class="fh5co-section-gray">
			<div class="container">
				<div class="row row-bottom-padded-md animate-box">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="images/groomsa.jpg" class="img-responsive" ">
							<h3>Sabareesh SS</h3>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><i class="icon-heart"></i></h2></div>
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="images/bridesha.jpg" class="img-responsive" ">
							<h3>Sharmili PD</h3>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-12 text-center heading-section">
							<h2>are celebrating love and tying the knot</h2> 	
							<p><strong>on Feb 05, 2018 &mdash; Madurai, Tamil Nadu</strong></p>
							<h2>The perfect way to commemorate the amazing past 8 years!</h2>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-countdown">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<p class="countdown">
						<span id="days"></span>
						<span id="hours"></span>
						<span id="minutes"></span>
						<span id="seconds"></span>
					</p>
				</div>
			</div>
		</div>

		<div id="fh5co-started" style="background-image:url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h2>Are You Attending?</h2>
						<p>Please Fill-up the form to notify you that you're attending. Thanks.
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-inline" action="contact-form/contact-form.php" method="post">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="text" name="fullname" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="text" name="emailid" class="form-control" placeholder="Email" >
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-primary btn-block">I am Attending</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
						<h3>You are Invited with love!</h3>
							<h2>Sabareesh &amp; Sharmili</h2>
						</div>
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
							<a href="https://www.linkedin.com/in/sabareesh-ss-76596559"><i class="icon-linkedin"></i></a>
								<a href="https://twitter.com/Sabareesh_SS"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/SabareeshSathy"><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/s.a.b.s.s/"><i class="icon-instagram"></i></a>
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	</div>
	<!-- END fh5co-wrapper -->

	<!-- Google Map 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	</body>
</html>

