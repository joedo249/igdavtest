<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>IGD Avocats est ouvert tous les jours de la semaine.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IGD Avocats répond rapidement à toutes demandes par téléphone ou par courriel. Vous avez un interlocuteur unique tout au long de l'affaire. Le cabinet est facilement accessible par les transports en commun.">
  <meta name="keywords" content="Paris, 19, avenue Victor Hugo, place du Général de Gaule, Etoile, métro, bus, RER, autolib, parking">
  <meta name="robots" content="index,follow">
  <meta name="theme-color" content="#0a4263">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' https://ajax.googleapis.com https://www.google.com/recaptcha/api.js www.gstatic.com www.google.com">
  <link rel="stylesheet" href="./css/body.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/form.css">
  <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
  <div id="wrapper">

    <?php include("igdheader.html"); ?>

    <?php include("igdnavbar.html"); ?>

    <div class ="gestZone">
		<script src="js/touchmove.js"></script>

      <picture>
        <source media="(max-width: 479px)" srcset="img/immeuble-7-mob.jpg">
        <source media="(min-width: 480px)" srcset="img/immeuble-7.jpg">
        <img src="img/immeuble-7-mob.jpg" alt="immeuble 19 avenue Victor Hugo Paris" class="image">
      </picture>

      <section id="contact">
        <article>
          <p id="adressePostale"><b>Le cabinet est situé 19 avenue Victor Hugo 75116 PARIS</b></p>
          <p>Le cabinet reçoit uniquement sur rendez-vous. L'accueil téléphonique est ouvert du lundi au vendredi de 9h30 à 13h00.<br><br>
            Pour prendre rendez-vous ou avoir des renseignements complémentaires, n'hésitez pas à nous contacter<br></p>

          <div id="contactTel">
            <p>- par téléphone :
              <a href="tel:+33143181025">01 43 18 10 25</a></p>
          </div>

          <div id="parMail">
            <p>- par mail :
              <span id="contactEmail">
                <script src="js/contactEmailScript.js" async></script>
              </span></p>
          </div>

          <div id="invitForm">
            <p>- ou en remplissant le formulaire ci-après</p>
          </div>
        </article>
      </section> <!-- /section contact -->

      <?php require("constant.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script>
      //mail sending validation  
        $(document).ready(function(e) {
          $("#frmContact").on('submit', (function(e) {
            e.preventDefault();
            $("#mail-status").hide();
            $('#send-message').hide();
            $('#loader-icon').show();
            $.ajax({
              url: "form_valid_fr.php",
              type: "POST",
              dataType: 'json',
              data: {
                "name": $('input[name="name"]').val(),
                "email": $('input[name="email"]').val(),
                "phone": $('input[name="phone"]').val(),
                "message": $('textarea[name="message"]').val(),
                "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
              },
              success: function(response) {
                $("#mail-status").show();
                $('#loader-icon').hide();
                if (response.type == "error") {
                  $('#send-message').show();
                  $("#mail-status").attr("class", "error");
                } else if (response.type == "message") {
                  $('#send-message').hide();
                  $("#mail-status").attr("class", "success");
                }
                $("#mail-status").html(response.text);
              },
              error: function() {}
            });
          }));
        });
      </script>

  <!--Load the JavaScript API-->
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!--contact form-->
      <div class="content" id="contactForm">
        <h1>Formulaire de contact</h1>
        <p>Envoyez votre message via ce formulaire et nous vous répondrons rapidement.</p>
        <div id="formulaire">
          <form id="frmContact" action="?" method="POST" novalidate="novalidate">
            <label for="contact_name">Nom :</label>
            <div class="field">
              <input type="text" id="contact_name" name="name" placeholder="entrez votre nom ici" class="required" aria-required="true" required>
            </div>
            <label for="contact_email">Email :</label>
            <div class="field">
              <input type="email" id="contact_email" name="email" placeholder="entrez votre adresse mail ici" class="required email" aria-required="true" required>
            </div>
            <label for="contact_message">Message :</label>
            <div class="field">
              <textarea id="contact_message" name="message" placeholder="entrez votre message ici"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
            <div id="mail-status"></div>
            <button type="Submit" id="send-message" style="clear:both;">Envoyer</button>
          </form>
          <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
        </div> <!-- formulaire -->
      </div> <!-- content -->

      <section id="plan">
        <div class="container">
          <div class="col-plan">
            <h1 id="titrePlan"><br>Plan<br></h1>
            <div class="googlemap">
              <iframe title="mapGoogle" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2664201594857!2d2.2894286158885726!3d48.8721974792889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fee7a0e2df7%3A0xf4ae84b6af56588!2s19+Avenue+Victor+Hugo%2C+75116+Paris%2C+France!5e0!3m2!1sfr!2sus!4v1523180688554" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div> <!-- /col-plan-->

          <div class="col-acces">
            <h1 id="access">Accès</h1>
            <p><b>Métro : </b>station Charles de Gaulle - Etoile : lignes
              <img src="img/lignemetro1.png" alt="métro 1" class="metro">
              <img src="img/lignemetro2.png" alt="métro 2" class="metro">
            </p>
              <p class="station">station Kléber: ligne
                <img src="img/lignemetro6.png" alt="métro 6" class="metro">
              </p>
        
            <p><b>RER : </b>station Charles de Gaulle - Etoile ligne
              <img src="img/ligneRER-A.png" alt="RER A" class="rer">
            </p>
            <p><b>Bus : </b>arrêt Charles de Gaulle - Etoile:</p>
              <p class="station">lignes
                <img src="img/lignebus22.png" alt="bus 22" class="bus">
                <img src="img/lignebus30.png" alt="bus 30" class="bus">
                <img src="img/lignebus31.png" alt="bus 31" class="bus">
                <img src="img/lignebus52.png" alt="bus 52" class="bus">
                <img src="img/lignebus73.png" alt="bus 73" class="bus">
                <img src="img/lignebus82.png" alt="bus 82" class="bus">
                <img src="img/lignebus92.png" alt="bus 92" class="bus">
                <br></p>
              <p><b>Parking :</b><br>
                <ul>
                  <li>Park Etoile-Foch 8 Avenue Foch à 3 minutes (240 m.)</li>
                  <li>Indigo 20 Avenue Carnot à 6 minutes (500 m.)</li>
                  <li>Q-Park Champs-Elysées 77 Avenue Marceau à 7 minutes (550 m.)</li>
                </ul>
              </p>
          </div> <!-- /col-acces -->
        </div> <!-- /container -->
      </section> <!-- /section plan -->
    </div> <!-- /gestZone -->

  <?php include("igdfooter.html"); ?>

</html>