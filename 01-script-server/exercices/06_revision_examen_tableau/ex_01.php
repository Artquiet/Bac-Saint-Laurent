<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- 1)	Créez un tableau "indicé" à une dimension qui contiendra 8 noms ;
    a) bouclez sur ce tableau pour afficher chacune des données
    b) idem mais passez à la ligne chacune des données
    c) idem mais affichez chacune des données dans une balise <p> différente
    d) idem mais dans une liste ordonnée => <ol><li> -->

    <?php 
    // tableau indicé
    $names = ["Georges", "Jean", "Pierre", "Arnaud", "Bernadette", 
    "Laura", "Marie", "Ciel"];

    echo "<ol>"; 
    foreach($names as $value){
        echo "<li>" . $value . "</li>";
    }
    echo "</ol>";

    ?>
</body>
</html>