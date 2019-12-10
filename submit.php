<?php
/* [VERIFY CAPTCHA FIRST] */
$secretKey = '6LcaKMMUAAAAAD7AU3jlaFJAljD0a_59Xe1k0ine'; // CHANGE THIS TO YOUR OWN!
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

ini_set('SMTP', 'smtp.orange.fr');
ini_set('smtp_port', '25');
ini_set('sendmail_from', 'jldc249@gmail.com'); //uniquement en localhost ?

/* [PROCESS YOUR FORM] */
if ($verify->success) {
  $to = "info1@igd-avocats.fr"; // CHANGE THIS TO YOUR OWN!
  $subject = "Contact Form";
  $message = "Name - " . $_POST['name'] . "\r\n";
  $message .= "Email - " . $_POST['email'] . "\r\n";
  $message .= "Message - " . $_POST['message'] . "\r\n";
  if (@mail($to, $subject, $message)) {
    // Send mail OK
    // @TODO - Show a nice thank you page or something
    echo '<p>Votre message a été envoyé.</p>';
  } else {
    // Send mail error
    // @TODO - Ask user to retry or give alternative
    echo '<p>Erreur.</p>';
  }
} else {
  // Invalid captcha
  // @TODO - Show error message, ask user to retry
  echo '<p>Veuillez recommencer !</p>';
}
?>