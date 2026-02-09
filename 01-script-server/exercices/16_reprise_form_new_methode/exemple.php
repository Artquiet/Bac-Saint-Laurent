<?php


include_once("include/fct_form.php");

$tagname = [
    "nom" => ["string", null],
    "prenom" => ["string", null],
    "age" => ["int", null]
];
init_tagname($tagname);
// On s'occupe des declarations. 
// On prepare a injecté les données que l'on récupera plus tard
// à l'aide d'un tableau pré rempli, sans données.

$chps = [];
$chps[] = addLayout("<div class:-='container'>");
$chps[] = addLayout("<div class='row'>");
$chps[] = addInput("Votre nom", ["name"=>"nom", "value" =>$post_nom], true, "six columns");


?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <title>Exemple</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="revisit-after" content="7 days">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton_collapse.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
    </head>
    <body>
        <div class="container" id="content">
        <?php
        
        ?>
        </div>
    </body>
</html>