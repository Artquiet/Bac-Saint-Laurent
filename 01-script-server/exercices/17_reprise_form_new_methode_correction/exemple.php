<?php
include_once("include/fct_form.php");
$tagname = [
     "nom" => ["string", null],
     "prenom" => ["string", null],
     "age" => ["int", null]
];
init_tagname($tagname);
$chps = [];
$chps[] = addLayout("<div class='container'>");
    $chps[] = addLayout("<div class='row'>");
        $chps[] = addInput("Votre nom", ["name"=>"nom","value"=>$post_nom], true, "six columns");
        $chps[] = addInput("Votre prénom", ["type"=>"text","name"=>"prenom","value"=>$post_prenom], true, "six columns");
    $chps[] = addLayout("</div>");
    $chps[] = addLayout("<div class='row'>");
        $chps[] = addInput("Votre âge", ["type"=>"number","name"=>"age","min"=>12,"max"=>120,"value"=>$post_age],true, "six columns");
        $chps[] = addSubmit(["name"=>"submit","value"=>"Valider"], "six columns");
    $chps[] = addLayout("</div>");
$chps[] = addLayout("</div>");

$show_form = form("form_id", "exemple.php", "POST", $chps);

if($show_form != false){
    // affichage du formulaire
    $affichage = $show_form;
}else{
    var_dump($_POST);
    // insertion des données
    $affichage = "<p>Vos données ont bien été insérées</p>";
}
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
        echo $affichage;
        ?>
        </div>
    </body>
</html>