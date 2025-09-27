<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Calendrier</title>
</head>
<body>
  <!-- Partie 2 – Un tableau pour les jours
    1.	Créez un tableau contenant les 7 jours de la semaine 
    (lundi, mardi… dimanche).
2.	Sous chaque mois (après le <h2>), affichez une balise <table>.
3.	Dans ce tableau, affichez les jours de la semaine en en-tête.
4.	Ajoutez les dates (1 à 31) sous ces jours, en partant du principe 
que chaque mois commence un lundi et qu’il y a toujours 31 jours. -->


    <?php

    $calendar = [
        "Janvier",
        "Février",
        "Mars", 
        "Avril", 
        "Mai", 
        "Juin",
        "Juillet", 
        "Aout", 
        "Septembre", 
        "Octobre", 
        "Novembre", 
        "Décembre",
    ];

    $week = [
        "Lundi",
        "Mardi",
        "Mercredi",
        "Jeudi",
        "Vendredi",
        "Samedi",
        "Dimanche",
    ];

    foreach ($calendar as $month){
        echo "<h2>" . $month . "</h2>";
        echo "<table style='border=1' cellspacing='0' cellpadding='5'>";
        echo "<tr>";
        foreach ($week as $day){
            echo "<th>" . $day . "</th>";
        }
        echo "</tr>";
        $cpt = 0;
        for ($i=1; $i<=31; $i++) {
            if($cpt == 0) {
                echo "<tr>";
            }
            echo "<td>" . $i . "</td>";
            if($cpt == 6) {
                echo "</tr>";
                $cpt = -1;
            }
            $cpt++;
        }
        echo "</table>";
    }

    ?>
</body>
</html>
         