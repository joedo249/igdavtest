<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>IGD Avocats est ouvert tous les jours de la semaine.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IGD Avocats répond rapidement à toutes demandes par téléphone ou par courriel. Vous avez un interlocuteur unique tout au long de l'affaire. Le cabinet est facilement accessible par les transports en commun.">
  <meta name="keywords" content="Paris, 19, avenue Victor Hugo, place du Général de Gaule, Etoile, transport en commun, métro, bus, RER, autolib, parking">
  <meta name="robots" content="index,follow">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/stylesheet_header.css">
  <link rel="stylesheet" href="css/stylesheet_body.css">
  <link rel="stylesheet" href="css/stylesheet_navbar.css">
  <link rel="stylesheet" href="css/stylesheet_form.css">
  <link rel="stylesheet" href="css/stylesheet_footer.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="component/jquery/jquery-3.2.1.min.js"></script>
</head>

<body>
  <div id="wrapper">

    <?php include("igdheader.php"); ?>

    <?php include("igdnavbar.php"); ?>

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
    </section>

    <?php
    require('constant.php');
    ?>

    <script>
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
              "content": $('textarea[name="content"]').val(),
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

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <div class="content" id="contactForm">
      <h1>Formulaire de contact</h1>
      <p>Envoyez votre message via ce formulaire et nous vous répondrons rapidement.</p>
      <div id="message">
        <form id="frmContact" action="" method="POST" novalidate="novalidate">
          <div class="label">Nom:</div>
          <div class="field">
            <input type="text" id="name" name="name" placeholder="entrez votre nom ici" class="required" aria-required="true" required>
          </div>
          <div class="label">Email:</div>
          <div class="field">
            <input type="email" id="email" name="email" placeholder="entrez votre adresse mail ici" class="required email" aria-required="true" required>
          </div>
          <div class="label">Message:</div>
          <div class="field">
            <textarea id="comment-content" name="content" placeholder="entrez votre message ici"></textarea>
          </div>
          <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
          <div id="mail-status"></div>
          <button type="Submit" id="send-message" style="clear:both;">Envoyer</button>
        </form>
        <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
      </div>
    </div> <!-- content -->

    <section id="plan">
      <div class="container">
        <div class="col-plan">
          <h1 id="titrePlan"><br>Plan<br></h1>
          <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2664201594857!2d2.2894286158885726!3d48.8721974792889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fee7a0e2df7%3A0xf4ae84b6af56588!2s19+Avenue+Victor+Hugo%2C+75116+Paris%2C+France!5e0!3m2!1sfr!2sus!4v1523180688554" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-acces">
          <h1 id="access">Accès</h1>
          <p><b>Métro : Station Charles de Gaulle - Etoile :</b><br>
            Lignes
            <img src="img/lignemetro1.png" alt="métro 1" class="metro">
            <img src="img/lignemetro2.png" alt="métro 2" class="metro">
            <img src="img/lignemetro6.png" alt="métro 6" class="metro"><br></p>
          <p><b>RER : Station Charles de Gaulle - Etoile:</b><br>
            Ligne
            <img src="img/ligneRER-A.png" alt="RER A" class="rer"></p>
          <p><b>Bus : Arrêt Charles de Gaulle - Etoile:</b><br>
            Lignes
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
        </div>
      </div>
    </section> <!-- end section plan -->
  </div> <!-- end wrapper -->

  <?php include("igdfooter.php"); ?>

</body>

</html>