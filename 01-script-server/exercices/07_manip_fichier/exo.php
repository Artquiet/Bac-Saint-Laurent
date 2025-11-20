<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo file_get_contents("texte.txt");
    echo "<br></br>";

    echo "<pre>";
    print_r(file("texte.txt"));
    echo "</pre>";
    // echo "<br></br>";

    // readfile


    ?>
</body>
</html>