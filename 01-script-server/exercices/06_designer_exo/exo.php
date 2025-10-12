<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Designer Exercice </title>
</head>
<body>
    <pre>
        Affichez la liste complète des designers (NOM + Prénom) 
        contenue dans le tableau dans une liste ordonnée ol et li.

        Ajoutez un lien cliquable "voir le détail"
        à côté de chaque designer. Le lien doit correspondre 
        à l'adresse suivante : detail_designer.php?designer=[id du designer]

        Ne faites pas encore la page detail_designer.php, 
        nous y travaillerons lors du prochain cours clin d’œil
    </pre>
    <?php
    @include_once("include/db.php");

    foreach($designerName as $designerPrenom){
        $designerPrenom = echo("mamma");
    }
    ?>
</body>
</html>