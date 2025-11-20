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
    $nbr_caractere = filesize("texte.txt");
    echo fread($ressource, $nbr_caractere);    

    ?>
</body>
</html>