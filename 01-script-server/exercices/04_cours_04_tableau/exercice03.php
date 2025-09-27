<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Calendrier</title>
</head>
<body>
<!-- Partie 3 – Adapter le nombre de jours
Modifiez votre code pour que les mois aient le bon nombre de jours :

31 jours : janvier, mars, mai, juillet, août, octobre, décembre
30 jours : avril, juin, septembre, novembre
28 jours : février (pas de bissextiles ici). -->


    <?php

    $calendar = [
        "Janvier" => $i = 31,
        "Février" => $i = 28,
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
         