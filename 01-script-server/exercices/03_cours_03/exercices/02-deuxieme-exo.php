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
    L'énnoncé

            2) créez un tableau "associatif" contenant 7 pays ;

            a) bouclez sur ce tableau pour afficher chacune des données dans une liste html

            b) ajouter 1 nouveau pays dans le tableau puis boucler à nouveau -> liste html

            c) idem mais en ajoutant 3 nouveaux pays

    </pre>
    <?php
    $pays = [
                "BE" => "Belgique", 
                "FR" => "France", 
                "IT" => "Italie",
                "ES" => "Espagne",
                "DE" => "Allemagne",
                "NL" => "Pays-Bas",
                "LU" => "Luxembourg"
            ];
            
    $pays["UK"] = "Grande-Bretagne";
    $pays["US"] = "Etat-Unis";
    $pays["PT"] = "Portugal";

    $txt = "";
    $txt .= "<ul>";
    foreach($pays as $value){
        $txt .= "<li>".$value."</li>";
    }
    $txt .= "</ul>";
    echo $txt;

    $txt = "";
    $txt .= "<ul>";
    foreach($pays as $key => $value){
        $txt .= "<li>".$key." : ".$value."</li>";
    }
    $txt .= "</ul>";
    echo $txt;
    ?>
</body>

</html>  