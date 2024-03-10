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
	<link rel="stylesheet" type="text/css" href="./php/styles.php">
	</head>

<body>
	<div id="wrapper">

		<?php include("igdheader.html"); ?>

		<?php include("igdnavbar.html"); ?>

		<div class ="gestZone">
		<script src="/.js/touchmove.js"></script>
			<picture>
				<source media="(max-width: 479px)" srcset="./img/snowman.jpg">
				<source media="(min-width: 480px)" srcset="./img/snowman.jpg">
				<img src="./img/img/snowman.jpg" alt="snowman" class="image">
			</picture>

			<main>
				<br>
			
				<?php
				$aDeviner = 150;
				$erreur = null;
				$succes = null;
				$value = null;

				if(isset($_GET['chiffre'])) {
					if($_GET['chiffre'] > $aDeviner) {
						$erreur = "Votre chiffre est trop grand";
					} 	elseif($_GET['chiffre'] < $aDeviner) {
						$erreur = "Votre chiffre est trop petit";
					}	else {
						$succes = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
						}

				$value = (int)$_GET['chiffre'];	
				}
				?>

				<?php if($erreur): ?>
					<div class="alert-erreur">
						<?= $erreur ?>
					</div>
					<?php elseif($succes): ?>
						<div class="alert-succes">
							<?= $succes ?>
						</div>
					<?php endif ?>

				<br>
				<form action="/jeu.php" method="GET">
					<div class="form-group">
						<input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php $value ?>">
					</div>
				<br>
					<button type="submit" class="button-submit">Deviner</button>
				</form>		

			</main>
		</div> <!-- /gestZone -->

		<br><br>
		<br><br>
		<br><br>
		<?php include("igdfooter.html"); ?>

</html>