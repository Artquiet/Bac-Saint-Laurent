<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2)	Créez un tableau "associatif" contenant 7 pays ;

    a) bouclez sur ce tableau pour afficher chacune 
    des données dans une liste html
    b) ajouter 1 nouveau pays dans le tableau 
    puis boucler à nouveau -> liste html
    c) idem mais en ajoutant 3 nouveaux pays -->

    <?php 

    $country = [
        "Germany" => 1, "France" => 2, "Belgium" => 3, "Italy" => 4,
        "Russia" => 5, "Africa" => 6, "United States" => 7, 
        "Australia" => 8, "Brazil" => 9, "Norway" => 10
    ];

    echo "<ol>";
    foreach ($country as $key => $value){
        echo "<li>" . $key . "</li>";
    }
    echo "</ol>"

    ?>
 
    
</body>
</html>