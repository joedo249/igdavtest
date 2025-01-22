<?php
	if ($_POST) {
		require('constant.php');

		// Remove all illegal characters from string or email
		// source : https://stackoverflow.com/questions/53772277/php-code-giving-me-an-error-upon-form-submission

		$user_name  = filter_var($_POST['name'], FILTER_UNSAFE_RAW); //remove illegal characters from name
		$user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //remove illegal characters
		$user_message = filter_var($_POST['message'], FILTER_UNSAFE_RAW); //remove tags from string values

		if (empty($user_name)) {
				$empty[] = '<b>Name</b>';
		}
		if (empty($user_email)) {
				$empty[] = '<b>Email</b>';
		}
		if (empty($user_message)) {
				$empty[] = '<b>Message</b>';
		}
		if (!empty($empty)) {
				$output = json_encode(array('type' => 'error', 'text' => implode(', ', $empty) . ' Required!'));
				die($output);
		}
		if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email format validation
				$output = json_encode(array('type' => 'error', 'text' => '<b>' . htmlentities($user_email) . '</b> est une adresse mail non valide.'));
				die($output);
		}

		require('component/recaptcha/src/autoload.php');

		// Verify user's response with reCAPTCHA v2.0 validation
		if (isset($_POST['g-recaptcha-response'])) {
			$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY, new \ReCaptcha\RequestMethod\SocketPost());
			$gRecaptchaResponse = $_POST['g-recaptcha-response']; //google captcha post data
			$remoteIp = $_SERVER['REMOTE_ADDR']; //to get user's ip - but not used
			$resp = $recaptcha->verify($gRecaptchaResponse);

			if (!$resp->isSuccess()) {
				$output = json_encode(array('type' => 'error', 'text' => '<b>Captcha</b> Validation Requise !'));
				die($output);
			}
		}

		// modification of ini.php file during script execution
		$from = "info@igd-avocats.fr";
		ini_set("SMTP", "SSL0.ovh.net");
		ini_set("smtp_port", "587");
		ini_set("sendmail_from", $from);

		$to = "info1@igd-avocats.fr";
		$fromName = "Site IGD Avocats";
		$subject = "Prise de contact";
		$message = "User Name: " . $user_name . "\r\n";
		$message .= "User Email: " . $user_email . "\r\n";
		$message .= "User Message: " . $user_message . "\r\n";
		
		// Set content-type header for sending HTML email 
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		$headers .= "From: " . $fromName . "<" . $from . "> \r\n";
		
		// wordwrap long content
		$message = wordwrap($message, 60, "\r\n");

		// reply information
		$replyTo = $user_email;
		$replyccName1 = "secretariat@igd-avocats.fr";
		$replyFromName = "IGD Avocats";
		$replySubject = "Prise de contact";
		$replyMessage = "Votre message a bien été reçu. Cordialement.";
		$replyHeaders = "From: " . $replyfromName . "<" . $from . "> \r\n";
		$replyHeaders .= "Cc: claire.dousset@igd-avocats.fr"; 

		// Send email
		if (mail($to, $subject, $message, $headers)) {
				$output = json_encode(array("type" => "message", "text" => "Bonjour " . $user_name . ", votre message a bien été envoyé."));
				mail($replyTo, $replySubject, $replyMessage, $replyHeaders);
				die($output);
		} else {
				$output = json_encode(array("type" => "error", "text" => "Le message n\'a pas été envoyé, merci de nous contacter par téléphone."));
				die($output);
		}
	}

	//ajout ?
	/*
	//Vérifier si la clé rechaptcha est valide
	function isValid($code, $ip = null)
		{
		if (empty($code)) {
			return false; // Si aucun code n'est entré, on ne cherche pas plus loin
		}
		$params = [
			'secret'    => "6LfqMSMdAAAAAGJrMCK10n77G9a0ly554fYhdx0J",
			'response'  => $code
		];
		if( $ip ){
			$params['remoteip'] = $ip;
		}
		$url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
		if (function_exists('curl_version')) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
			$response = curl_exec($curl);
		} else {
			// Si curl n'est pas dispo, un bon vieux file_get_contents
			$response = file_get_contents($url);
		}

		if (empty($response) || is_null($response)) {
			return false;
		}

		$json = json_decode($response);
		return $json->success;
		}
	*/
?>
