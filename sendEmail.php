<!-- http://cotourist.com/integrate-google-recaptcha-with-php/ -->
<!-- send email using PHP https://www.guru99.com/php-mail.html -->


<?php
// modification of ini.php file during script execution
$from = "noreply@igd-avocats.fr";
ini_set("SMTP", "SSL0.ovh.net");
ini_set("smtp_port", "587");
ini_set("sendmail_from", $from);

$user_name = "Dupont";
$user_email = "nom@exemple.com";


$to = "jldc249@gmail.com";
$fromName = "Site IGD Avocats";
$subject = "Testing PHP Mail";
$message = "User Name: " . $user_name . "\r\n";
$message .= "User Email: " . $user_email . "\r\n";
$message .= "This mail is sent using the PHP mail function.";

// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= "From: " .$fromName. "<" .$from.">"; 

// wordwrap long content
$message = wordwrap($message, 70, "\r\n");

// Send email 
if(mail($to, $subject, $message, $headers)) { 
   echo "Email has been sent successfully."; 
}else { 
   echo "Email sending failed."; 
}
?>
