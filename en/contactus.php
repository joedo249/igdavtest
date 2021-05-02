<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>IGD Avocats is opened every working day</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IGD Avocats answers quickly to all requests by phone or email. The office is easily accessible by public transport">
  <meta name="keywords" content="Paris, 19, avenue Victor Hugo, place du General de Gaule, Etoile, public transport, metro, bus, RER, parking">
  <meta name="robots" content="index,follow">
  <meta name="theme-color" content="#0a4263">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' https://ajax.googleapis.com https://www.google.com/recaptcha/api.js www.gstatic.com www.google.com">
  <link rel="stylesheet" href="../css/stylesheet_body.css">
  <link rel="stylesheet" href="../css/stylesheet_header.css">
  <link rel="stylesheet" href="../css/stylesheet_navbar.css">
  <link rel="stylesheet" href="../css/stylesheet_form.css">
  <link rel="stylesheet" href="../css/stylesheet_footer.css">
</head>

<body>
  <div id="wrapper">

    <?php include("en_header.php"); ?>

    <?php include("en_navbar.php"); ?>

    <picture>
      <source media="(max-width: 479px)" srcset="../img/immeuble-7-mob.jpg">
      <source media="(min-width: 480px)" srcset="../img/immeuble-7.jpg">
      <img src="../img/immeuble-7-mob.jpg" alt="immeuble 19 avenue Victor Hugo Paris" class="image">
    </picture>

    <section id="contact">
      <article>
        <p><strong>Our office is located at 19 avenue Victor Hugo 75116 Paris</strong></p><br>
        <p>Our office is open by appointment only. The telephone reception is open from Monday to Friday from 9:30 AM to 1:00 PM.</p>
        <p>Let us help you determine the best course of action to resolve your law issue. To learn more about what our lawyers can do for you :<br><br></p>

        <div id="contactTel">
          <p>- call :
            <a href="tel:+33143181025">+33 143 18 10 25</a></p>
        </div>

        <div id="parMail">
          <p>- email:
            <span id="contactEmail">
              <script src="../js/contactEmailScript.js" async></script>
            </span></p>
        </div>

        <div id="invitForm">
          <p>- or by completing the form below</p>
        </div>

        <p><br>All information you give will be kept confidential and not passed to anyone else.</p>
      </article>
    </section>

    <?php
    require('../constant.php');
    ?>

    <script>
      $(document).ready(function(e) {
        $("#frmContact").on('submit', (function(e) {
          e.preventDefault();
          $("#mail-status").hide();
          $('#send-message').hide();
          $('#loader-icon').show();
          $.ajax({
            url: "form_valid_en.php",
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

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <div class="content" id="contactForm">
      <h1>Contact Form</h1>
      <p>Send your message through this form and we will get back to you. </p>
      <div id="formulaire">
        <form id="frmContact" action="" method="POST" novalidate="novalidate">
          <label for="contact_name">Name:</label>
          <div class="field">
            <input type="text" id="contact_name" name="name" placeholder="enter your name here" title="Please enter your name" class="required" aria-required="true" required>
          </div>
          <label for="contact_email">Email:</label>
          <div class="field">
            <input type="email" id="contact_email" name="email" placeholder="enter your email address here" title="Please enter your email address" class="required email" aria-required="true" required>
          </div>
          <label for="contact_message">Message:</label>
          <div class="field">
            <textarea id="contact_message" name="message" placeholder="enter your message here"></textarea>
          </div>
          <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
          <div id="mail-status"></div>
          <button type="Submit" id="send-message" style="clear:both;">Send Message</button>
        </form>
        <div id="loader-icon" style="display:none;"><img src="../img/loader.gif" /></div>
      </div>
    </div> <!-- content -->

    <section id="plan">
      <div class="container">
        <div class="col-plan">
          <h1 id="titrePlan"><br>Map<br></h1>
          <div class="googlemap">
            <iframe title="mapGoogle" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2664201594857!2d2.2894286158885726!3d48.8721974792889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fee7a0e2df7%3A0xf4ae84b6af56588!2s19+Avenue+Victor+Hugo%2C+75116+Paris%2C+France!5e0!3m2!1sfr!2sus!4v1523180688554" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-acces">
          <h1 id="access">Access</h1>
          <p><b>Métro: </b>Station Charles de Gaulle - Etoile: Lines
            <img src="../img/lignemetro1.png" alt="métro 1" class="metro">
            <img src="../img/lignemetro2.png" alt="métro 2" class="metro"></p>
          <p class="station">Station Kléber: Line
            <img src="../img/lignemetro6.png" alt="métro 6" class="metro">
          </p>
          <p><b>RER : </b>Station Charles de Gaulle - Etoile: Line
            <img src="../img/ligneRER-A.png" alt="RER A" class="rer"></p>
          <p><b>Bus Stop: </b>Charles de Gaulle - Etoile:</p>
          <p class="station">Lines
            <img src="../img/lignebus22.png" alt="bus 22" class="bus">
            <img src="../img/lignebus30.png" alt="bus 30" class="bus">
            <img src="../img/lignebus31.png" alt="bus 31" class="bus">
            <img src="../img/lignebus52.png" alt="bus 52" class="bus">
            <img src="../img/lignebus73.png" alt="bus 73" class="bus">
            <img src="../img/lignebus82.png" alt="bus 82" class="bus">
            <img src="../img/lignebus92.png" alt="bus 92" class="bus">
            <br></p>
          <p><b>Parking :</b><br>
            <ul>
              <li>Park Etoile-Foch 8 Avenue Foch at 3 minutes walk (240 m.)</li>
              <li>Indigo 20 Avenue Carnot at 6 minutes walk (500 m.)</li>
              <li>Q-Park Champs-Elysées 77 Avenue Marceau at 7 minutes (550 m.)</li>
            </ul>
          </p>
        </div> <!-- /col-acces -->
      </div> <!-- /container -->
    </section> <!-- close section plan -->

  </div> <!-- end wrapper -->

  <?php include("en_footer.php"); ?>

</body>

</html>