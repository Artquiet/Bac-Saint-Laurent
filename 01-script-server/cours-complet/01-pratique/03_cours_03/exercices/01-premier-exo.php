
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau resumer</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
  <pre>

    Exercice 1 :

        Array : premiers exercices
        Conditions d’achèvement

            1) créez un tableau "indicé" à une dimension 
            qui contiendra 8 noms;

            a) bouclez sur ce tableau pour afficher 
            chacune des données

            b) idem mais passez à la ligne chacune des données

            c) idem mais affichez chacune des données dans une balise <p> 
                différente

            d) idem mais dans une liste ordonnée =>
             <!-- <ol><li> -->

    </pre>
    <?php 
        $names = ["Justine", "Gerard", "Quentin", "Oceane",
                "Jean", "Jeanne", "Emilie", "Gabriel"];
 
        foreach ($names as $name) {
            echo  $name . " ";
            echo  $name . "<br>";
            echo "<p>" . $name . "</p>";
        }
            echo "<ul>" . $name . "</ul>";
            foreach ($names as $nameValue){
                echo "<li>" . $nameValue . "</li>";
            }
    ?> 

</body>

</html>  