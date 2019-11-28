<!Doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IGD Avocats répond rapidement à toutes demandes par téléphone ou par courriel. Vous avez un interlocuteur unique tout au long de l'affaire. Le cabinet est facilement accessible par les transports en commun.">
    <meta name="keywords" content="Paris, 19, avenue Victor Hugo">    
    <link rel="stylesheet" href="stylesheet_form.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <h2 id="formTitle">Contact</h2>

    <form method="post">
        <p><label>Votre nom (obligatoire)</label><br>
        <input type="text" name="nom" required><br></p>

        <p><label>Votre email (obligatoire)</label><br>
        <input type="email" name="email" required><br></p>

        <p><label>Objet</label><br>
        <input type="text" name="objet"><br></p>

        <p><label>Message</label><br>
        <textarea name="message" required></textarea><br></p>

        <div class="g-recaptcha" data-sitekey="6LfPJMIUAAAAAK1TM_Fri-c1ILuVxZAwdmYyHGeL"></div>
        <br/>
        <input type="submit" value="Submit" name="submitpost">

    </form>

<?php
    require_once 'recaptcha/autoload.php';
    if(isset($_POST['submitpost'])) {
        if(isset($_POST['g-recaptcha-response'])) {
            $recaptcha = new \ReCaptcha\ReCaptcha('6LfPJMIUAAAAALGMM3Sao2RgYuwYe1p_MUFpwT18');
            $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
            if ($resp->isSuccess()) {
                $retour = mail('jldc249@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            } else {
                if($retour)
                    echo '<p>Votre message a été envoyé.</p>';
                else
                    echo '<p>Erreur.</p>';
            }
        }
    }
    
?>
    
</body>
</html>
