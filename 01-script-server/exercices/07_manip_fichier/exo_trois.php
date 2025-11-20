<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $ressource = fopen("texte.txt", "rb");
    
    echo 'premier appel : ' .fgets($ressource). '<br>';
    echo 'deuxieme appel : ' .fgets($ressource). '<br>';
    echo 'troisieme appel : ' .fgets($ressource). '<br>';
    echo fread($ressource, $nbr_caractere);    

    ?>
</body>
</html>