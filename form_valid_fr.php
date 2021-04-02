<?php
if ($_POST) {
    require('constant.php');

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
        $output = json_encode(array('type' => 'error', 'text' => '<b>' . $user_email . '</b> est une adresse mail non valide.'));
        die($output);
    }

    $from = "info1@igd-avocats.fr";
    ini_set('SMTP', 'SSL0.ovh.net');
    ini_set('smtp_port', '993');
    ini_set('sendmail_from', $from);

    //reCAPTCHA validation
    if (isset($_POST['g-recaptcha-response'])) {

        require('component/recaptcha/src/autoload.php');

        $recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY, new \ReCaptcha\RequestMethod\SocketPost());

        $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$resp->isSuccess()) {
            $output = json_encode(array('type' => 'error', 'text' => '<b>Captcha</b> Validation Required!'));
            die($output);
        }
    }

    $toEmail = "info1@igd-avocats.fr";
    $mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
    $mailBody = "User Name: " . $user_name . "\n";
    $mailBody .= "User Email: " . $user_email . "\n";
    $mailBody .= "User Message: " . $user_message . "\n";

    if (mail($toEmail, "Contact Mail", $mailBody, $mailHeaders)) {
        $output = json_encode(array('type' => 'message', 'text' => 'Bonjour ' . $user_name . ', votre message a bien été envoyé.'));
        die($output);
    } else {
        $output = json_encode(array('type' => 'error', 'text' => 'Le message n\'a pas été envoyé, merci de contacter ' . $from));
        die($output);
    }
}
