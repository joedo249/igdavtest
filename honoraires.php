<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Honoraires</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="IGD Avocats garantit une transparence totale des honoraires en proposant des honoraires forfaitaires ou une convention d'honoraires. Notre structure légère et la compétence de nos avocats permettent d'assurer un bon rapport qualité-prix.">
	<meta name="keywords" content="honoraire, transparence, rapport qualité-prix, convention, accord, confiance, forfait, suivi">
	<meta name="robots" content="index,follow">
	<meta name="theme-color" content="#0a4263">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' https://ajax.googleapis.com">
  <link rel="stylesheet" href="./css/body.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
	<div id="wrapper">

		<?php include("igdheader.html"); ?>

		<?php include("igdnavbar.html"); ?>

		<div class ="gestZone">
		<script src="js/touchmove.js"></script>
			<picture>
				<source media="(max-width: 479px)" srcset="./img/bureau-78-mob.jpg">
				<source media="(min-width: 480px)" srcset="./img/bureau-7.jpg">
				<img src="./img/bureau-78-mob.jpg" alt="bureau d'Isabelle Guyader Dousset" class="image">
			</picture>

			<main>
				<section>
					<aside>
						<img src="img/logo-avocats-paris.jpg" loading="lazy" alt="ordre des avocats Paris" id="avocats_paris">
					</aside>
					<article id="honoraires">
						<h1>Honoraires</h1>
						<p>Les rapports de confiance que le cabinet entretient avec ses clients sont fondés sur une <b>transparence totale</b> à leur égard tant en ce qui concerne le compte rendu des actions menées que les éléments de facturation.</p>
						<p>Le montant des honoraires est déterminé en fonction de la complexité de l'affaire et de l'importance des intérêts en cause.</p>
						<p>Si le client décide, en accord avec l'avocat, qu’une procédure doit être engagée ou poursuivie, en demande ou en défense, une convention d'honoraires sera signée.</p>
						<p>Les honoraires sont facturés au forfait ou au temps passé. Le cas échéant, un honoraire de résultat peut également s'appliquer.</p>
						<p>Dans tous les cas, le montant des honoraires est établi en accord avec le client.</p>
					</article>
				</section>
			</main>
		</div> <!-- /gestZone -->
		
		<button type="button" class="button" onclick="location.href='contact.php#contactForm';">Demander un devis gratuit en ligne</button>

		<?php include("igdfooter.html"); ?>

</html>