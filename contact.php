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
    <link rel="stylesheet" href="stylesheets/stylesheet_header.css">    
    <link rel="stylesheet" href="stylesheets/stylesheet_body.css">
    <link rel="stylesheet" href="stylesheets/stylesheet_navbar.css">
    <link rel="stylesheet" href="stylesheets/stylesheet_footer.css">
    <link rel="stylesheet" type="text/css" href="fancybox-master/dist/jquery.fancybox.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
   <div id="wrapper">
     
   <?php include("igdheader.php"); ?>

   <?php include("igdnavbar.php"); ?> 

      <picture>
         <source media="(max-width: 479px)" srcset="images_igdav/immeuble-7-mob.jpg">
         <source media="(min-width: 480px)" srcset="images_igdav/immeuble-7.jpg">          
         <img src="images_igdav/immeuble-7-mob.jpg" alt="immeuble 19 avenue Victor Hugo Paris" class="image">
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
               
            <p id="parMail">- par mail :       
               <span id="contactEmail">
                  <script src="js/contactEmailScript.js" async></script>
               </span>
            </p>
         </article>
      </section>
       
      <section id="plan">
         <div class="container">
            <div class="col-plan">
               <h1 id="titrePlan"><br>Plan<br></h1>
               <div class="googlemap">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.2664201594857!2d2.2894286158885726!3d48.8721974792889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fee7a0e2df7%3A0xf4ae84b6af56588!2s19+Avenue+Victor+Hugo%2C+75116+Paris%2C+France!5e0!3m2!1sfr!2sus!4v1523180688554" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
            </div>
         
            <div class="col-acces">
               <h1>Accès</h1>
               <p><b>Métro : Station Charles de Gaulle - Etoile :</b><br>
               Lignes
               <img src="images_igdav/lignemetro1.png" alt="métro 1" class="metro">        
               <img src="images_igdav/lignemetro2.png" alt="métro 2" class="metro">        
               <img src="images_igdav/lignemetro6.png" alt="métro 6" class="metro"><br></p>        
               <p><b>RER : Station Charles de Gaulle - Etoile:</b><br>
               Ligne
               <img src="images_igdav/ligneRER-A.png" alt="RER A" class="rer"></p>        
               <p><b>Bus : Arrêt Charles de Gaulle - Etoile:</b><br>
               Lignes
               <img src="images_igdav/lignebus22.png" alt="bus 22" class="bus">        
               <img src="images_igdav/lignebus30.png" alt="bus 30" class="bus">        
               <img src="images_igdav/lignebus31.png" alt="bus 31" class="bus">        
               <img src="images_igdav/lignebus52.png" alt="bus 52" class="bus">        
               <img src="images_igdav/lignebus73.png" alt="bus 73" class="bus">        
               <img src="images_igdav/lignebus82.png" alt="bus 82" class="bus">        
               <img src="images_igdav/lignebus92.png" alt="bus 92" class="bus">
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
      </section>   <!-- close section plan -->

      <section id="formulaire" ></section>

      <h2 id="formTitle">Formulaire de contact</h2>
      <br>

      <form method="post" action="">
         <p><label>Votre nom (obligatoire)</label><br>
         <input type="text" name="sender_name" required><br></p>

         <p><label>Votre email (obligatoire)</label><br>
         <input type="email" name="sender_email" required><br></p>

         <p><label>Objet</label><br>
         <input type="text" name="sender_subject"><br></p>

         <p><label>Message</label><br>
         <textarea name="sender_message" required></textarea><br></p>
         <br>

<!-- reCaptcha en fin de formulaire -->
         <div class="g-recaptcha" data-sitekey="6LfPJMIUAAAAAK1TM_Fri-c1ILuVxZAwdmYyHGeL"></div>
         <br><br>
         <input type="submit" value="Valider">
      </form>

      <?php

         require_once 'recaptcha/autoload.php';
         $recaptcha = new \ReCaptcha\ReCaptcha('6LfPJMIUAAAAALGMM3Sao2RgYuwYe1p_MUFpwT18');
         $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
         if ($resp->isSuccess()) {
            // Verified! envoi email ?
         } else {
            $errors = $resp->getErrorCodes();
         }      
      ?>

   </section>

   </div>  <!-- end wrapper -->

   <?php include("igdfooter.php"); ?>

</body>                     
</html>
