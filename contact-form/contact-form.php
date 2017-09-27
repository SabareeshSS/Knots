<?php
if(isset($_POST['submit'])) 
{

$message=
'Name of the Guest	:	'.$_POST['name'].'<br />
Phone Number 		:	'.$_POST['phone'].'<br />
Email Address		:	'.$_POST['email'].'<br />
Number of Guests	:	'.$_POST['dropdown'].'<br />
Greetings			:	'.$_POST['message'].'<br />
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();               	 	// Sets up a SMTP connection  
    $mail->SMTPAuth = true;         	// Connection with the SMTP does require authorization    
    $mail->SMTPSecure = 'ssl';     		// Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  	// Gmail SMTP server address
    $mail->Port = 465;  				// Gmail SMTP port Options: Port 25, 465, or 587
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "sawedssha@gmail.com"; 	// Your full Gmail address
    $mail->Password   = "febx052018"; 			// Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = "RSVP Received: A New Attendee";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("sssabrsh@gmail.com", "Sabareesh"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message01 = $result ? 'Thank you so much for accepting the invitation!' : 'Sorry for the inconvenience! Please do RSVP later.';
	echo $message01;
	unset($mail);
}
	header("Location: ../success.html");
	exit;
?>
