<?php
	if ($_POST) {
		require('../constant.php');

		// Remove all illegal characters from string or email
		$user_name  = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
		$user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
		$user_message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

		if (empty($user_name)) {
			$empty[] = "<b>Name</b>";
		}
		if (empty($user_email)) {
			$empty[] = "<b>Email</b>";
		}
		if (empty($user_message)) {
			$empty[] = "<b>Message</b>";
		}
		if (!empty($empty)) {
			$output = json_encode(array('type' => 'error', 'text' => implode(", ", $empty) . ' Required!'));
			die($output);
		}
		if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email validation
			$output = json_encode(array('type' => 'error', 'text' => '<b>' . $user_email . '</b> is an invalid Email, please correct it.'));
			die($output);
		}

		require('../component/recaptcha/src/autoload.php');

		// Verify user response with reCAPTCHA v2.0 validation
		if (isset($_POST['g-recaptcha-response'])) {
			$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
			$gRecaptchaResponse = $_POST['g-recaptcha-response']; //google captcha post data
			$remoteIp = $_SERVER['REMOTE_ADDR']; //to get user's ip - but not used
			$resp = $recaptcha->verify($gRecaptchaResponse);

			if (!$resp->isSuccess()) {
				$output = json_encode(array('type' => 'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);
			}
		}

		// modification of ini.php file during script execution
		$from = $user_email;
		ini_set("SMTP", "SSL0.ovh.net");
		ini_set("smtp_port", "587");
		ini_set("sendmail_from", $from);

		$to = "info1@igd-avocats.fr";
		$fromName = "SiteIGD Avocats";
		$subject = "Prise de contact";
		$message = "User Name: " . $user_name . "\r\n";
		$message .= "User Email: " . $user_email . "\r\n";
		$message .= "User Message: " . $user_message . "\r\n";
		
		// Set content-type header for sending HTML email 
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		$headers .= "From: " . $fromName . "<" . $from . "> \r\n";
		
		// wordwrap long content
		$message = wordwrap($message, 70, "\r\n");

		// Send email
		if (mail($to, $subject, $message, $headers)) {
			$output = json_encode(array('type' => 'message', 'text' => 'Hi ' . $user_name . ', thank you for the message. We will get back to you shortly.'));
			die($output);
		} else {
			$output = json_encode(array('type' => 'error', 'text' => 'Unable to send email, please contact' . $from));
			die($output);
		}
	}
?>