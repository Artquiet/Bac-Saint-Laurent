<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- 3) créez un tableau carnet d'adresses qui 
    contiendra les informations suivantes

	- nom 
	- prénom
	- adresse postale
	- email
	- numéro de téléphone

   a) Bouclez sur ce tableau pour afficher 
   les informations contenues (/!\ n'oubliez pas d'afficher les clés associées)

   b) idem mais en affichant le nom en majuscule 
   et la première lettre du prénom en majuscule et le reste en minuscule. -->
    <?php

    $clientArray = [
        "nom" => ["Durant", "Dupont", "Lejeune"],
        "prenom" => ["Roger", "robert", "Alicia"],
        "CodePostal" => [4000, 4800, 4789],
        "email" => [
            "durant.roger@gmail.com", 
            "dupont.robert@gmail.com",
            "lejeune.alicia@gmail.com",
        ],
        "tel" => [4562358, 4856978, 4658721],
    ];

    foreach ($clientArray as $key => $value){
        echo "<p>" . $key . " :"  . "</p>"; 
        foreach ($value as $item){
            echo $item . "<br>";
        }
    }

    ?>

</body>
</html>