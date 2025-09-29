<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Calendrier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Partie 4 – Enchaîner correctement les mois
 push le code
Modifiez votre code pour que les mois aient le bon nombre de jours :
1.	Cette fois, le premier jour du mois suivant doit dépendre du dernier jour du mois précédent.
2.	Exemple : si janvier se termine un mercredi, alors février doit commencer un jeudi.
3.	Continuez ainsi pour toute l’année.
👉 Trucs et astuces si je suis bloqué : -->

    <?php

    $calendar = [
        "Janvier" => 31,
        "Février" => 28,
        "Mars" => 31, 
        "Avril" => 30, 
        "Mai" => 31, 
        "Juin" => 30,
        "Juillet" => 31, 
        "Aout" => 31, 
        "Septembre" => 30, 
        "Octobre" => 31, 
        "Novembre" => 30, 
        "Décembre" => 31,
    ];

    $week = [
        "Lundi" => 0,
        "Mardi" => 1,
        "Mercredi" => 2,
        "Jeudi" => 3,
        "Vendredi" => 4,
        "Samedi" => 5,
        "Dimanche" => 6,
    ];

    $startDay = 0;
    $countDay = 0;
    foreach ($calendar as $month => $numberOfDays){
        
        echo "<h2>" . $month . "</h2>";
        echo "<table style= cellspacing='0' cellpadding='5'>";
        echo "<tr>";
        foreach ($week as $day => $indexDay){
            echo "<th>" . $day . "</th>";
        }
        echo "</tr>";
        $cpt = 0;

        for ($i=1; $i <= $numberOfDays; $i++) {
              
            if($cpt == 0) {
                echo "<tr>" ;
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
         