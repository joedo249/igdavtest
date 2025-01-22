<?php
// Generate a nonce
$nonce = base64_encode(random_bytes(16));
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cabinet d'avocats spécialisé en droit du travail notamment dans le secteur du transport et de la sécurité. Le cabinet intervient en droit de la famille">
  <meta name="keywords" content="Isabelle Guyader Dousset, Claire Dousset, avocat, Paris, licenciement, abusif, harcèlement, droit du travail, droit social, sécurité sociale, transport, conseil, contentieux, litige, tribunal, prud'hommes, famille, divorce, garde des enfants, cour d'appel">
  <meta name="robots" content="index,follow">
  <meta name="theme-color" content="#0a4263">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'nonce-<?php echo $nonce; ?>' 'unsafe-inline' https://ajax.googleapis.com">
  <link rel="stylesheet" href="./css/body.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/body_slidein.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

 <body>
  
  <?php require './igdheader.php'; ?>

  <?php include "./igdnavbar.html"; ?>

  <div id="wrapper">
  <!-- simulate click on link to activate index.php on website opening. -->
  <script nonce="<?php echo $nonce; ?>">
     window.onload = function() {
      if (!("hasRunBefore" in sessionStorage)) {
        document.getElementById("first").click();
        sessionStorage.setItem("hasRunBefore", true);
      }
    }
  </script>

<div class="modal-cookie">
  <div class="modal-cookie-content">
    <button onclick="hideModal()" class="close-btn" id="close">X</button>
    <img src="./img/cookie.jpg" id="img-cookie" alt="cookie" />
    <!--<p>We don't use any cookies!</p>
    That's fine! -->
    <p>Ce site n'utilise pas de cookies !</p>
    <button onclick="hideModal()" class="close-btn" id="accept">
      Très bien !
    </button>
  </div>
</div>
<script src="./js/cookie.js"></script>

<div class ="gestZone">
<script src="./js/touchmove.js"></script>

<picture>
        <source media="(max-width: 479px)" srcset="img/arc-de-triomphe-78-mob.jpg">
        <source media="(min-width: 480px)" srcset="img/arc-de-triomphe-7.jpg">
        <img src="img/arc-de-triomphe-7-mob.jpg" alt="L'Arc de Triomphe" class="image">
        <figcaption>La défense <br>de vos droits</figcaption>
      </picture>

  <main>
    <section>
      <article id="cabinet">
        <h1>Le cabinet IGD Avocats</h1>
        <p>Depuis sa création en 1995, le cabinet IGD Avocats vous conseille et, lors des procédures judiciaires, vous assiste ou vous représente sur tout le territoire français.</p>
        <p>La force de notre cabinet repose sur une grande maîtrise de son cœur de métier et sur la diversité de sa clientèle qui va des grandes entreprises aux particuliers.</p>
        <h2>Conseil et activité contentieuse</h2>
        <p>La pratique quotidienne des Juridictions nous permet d'offrir un conseil pertinent intégrant le risque contentieux, alors que notre activité de conseil conforte, dans nos domaines de compétence, la qualité de l'argumentation qui sera développée à la barre.</p>
        <h2>Disponibilité et souplesse</h2>
        <p>Le choix de consacrer notre pratique à certains aspects du droit nous permet d'offrir une prestation aussi efficace et productive que possible et ainsi d'en optimiser le coût.</p>
        <p>Nous avons à cœur d'être réactifs face aux demandes de nos clients.Si nous pensons que nous ne sommes pas en mesure de défendre au mieux vos intérêts, nous vous en informons et pouvons vous diriger vers un cabinet spécialisé.</p>
      </article>
    </section>
  </main>
</div> <!-- /gestZone -->

  <button type="button" class="button" onclick="location.href='./equipe.php'">Pour en savoir plus sur notre cabinet !</button>

  <!-- the end parenthesis of include is red since the implementation of <button class="button" onclick=""... line
  instead of the former <button class="button"> with <p class="inner-text"> -->

  <?php include('igdfooter.html'); ?>

</html>