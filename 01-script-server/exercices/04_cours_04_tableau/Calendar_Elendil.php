<!DOCTYPE html>
<html lang="fr">

<!--
		6) Ajout d'ancrage pour naviguer:

		1. Ajoutez une liste de liens cliquables en haut de la page : un lien par année (2020, 2021, …, 2050).
		2. Chaque lien doit amener directement à l’année correspondante grâce à un ancrage (<a href="#2025">2025</a>).
		3. Chaque année affichée dans le calendrier doit donc avoir un attribut "id" correspondant
-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calendar 0.06</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
			background-color: #141414ff;
		}

		.dropdown {
			position: relative;
			display: inline-block;
			margin-bottom: 20px;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			text-align: center;
			top: 100%;
			background-color: white;
			min-width: 100px;
			z-index: 10;
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown-content a {
			display: block;
			padding: 5px 10px;
			text-decoration: none;
			color: white;
			background-color: black;
		}

		.dropdown-content a:hover {
			color: black;
			background-color: #eee;
		}
	</style>
</head>

<body>
	<nav class="dropdown">
		<button style="padding:5px 10px; cursor:pointer;">▶Time Warp !</button>
		<div class="dropdown-content">
			<?php
			for ($y = 2020; $y <= 2050; $y++) {
				echo "<a href='#$y'>$y</a>";
			}
			?>
		</div>
	</nav>

	<?php
	$mois = [
		"janvier" => 31,
		"février" => 28,
		"mars" => 31,
		"avril" => 30,
		"mai" => 31,
		"juin" => 30,
		"juillet" => 31,
		"août" => 31,
		"septembre" => 30,
		"octobre" => 31,
		"novembre" => 30,
		"décembre" => 31
	];

	$jours = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
	
	$cpt = 3;

	// * Init Calandarier :
	
	// * Boucle sur l'année
	for ($annee = 2020; $annee <= 2050; $annee++) {

		echo "<h1 id='$annee' style='color: white;'>Année $annee</h1>";

		echo "<div id='$annee' style='display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
		gap:20px; margin-bottom: 80px;'>";

		// ? bisextile ?
		$mois["février"] = (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) ? 29 : 28;

		// * Boucle sur les mois
		foreach ($mois as $key => $value) {

			echo "<div style='border:1px solid #333; padding:10px; text-align:center; background:white; border-radius: 10px;'>";
			echo "<h2>" . $key . "</h2>";
			echo "<table border='1' style='width:100%; text-align:center; border-collapse:collapse;'><tr>";

			foreach ($jours as $jour_actuel) {
				echo "<th>" . substr($jour_actuel, 0, 2) . "</th>";
			}
			echo "</tr><tr>";

			// * cases vides de début de mois
			if ($cpt > 1) {							//& Si le compteur est plus grand que 1
				for ($j = 1; $j < $cpt; $j++) { 	//& tant que l'itération est plus petite que le compteur, tu me met une case vide
					echo "<td></td>";
				}
			}

			// * jours du mois
			for ($i = 1; $i <= $value; $i++) {
				echo "<td>" . $i . "</td>";

				if ($cpt == 7) {
					echo "</tr><tr>";	//& Si le compteur arrive à 7, tu mets fin à la ligne du tab, tu m'en remet une autre 
					$cpt = 0;			//&  et tu repasse le compteur à 0
				}
				$cpt++;
			}

			// * cases vides de fin de mois
			if ($cpt != 1) {						//& Si le compteur est différent de 1
				for ($j = $cpt; $j <= 7; $j++) {	//& Tant que l'itération est plus petite que 7 ou les vaut, tu mets une case vide
					echo "<td></td>";
				}
			}
			echo "</tr></table>";
			echo "</div>";
		}
		echo "</div>";
	}
	?>
</body>

</html>