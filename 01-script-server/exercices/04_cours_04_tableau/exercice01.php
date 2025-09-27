<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Calendrier</title>
</head>
<body>
    <!-- Partie 1 – Les mois de l’année
    1.	Créez un tableau contenant les 12 mois de l’année 
    (janvier, février, mars… décembre).
    2.	Parcourez ce tableau avec une boucle.
    3.	Affichez chaque mois dans une balise <h2>.
    👉 Trucs et astuces si je suis bloqué : -->

    <?php

    $calendar = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                    "Juillet", "Aout", "Septembre", "Octobre", "Novembre", 
                    "Décembre"];

    foreach ($calendar as $month){
        echo "<h2>" . $month . "</h2>";
    }

    ?>

</body>
</html>