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
    L' énnoncé : 

            3) créez un tableau carnet d'adresses qui contiendra 
            les informations suivantes

                - nom 

                - prénom

                - adresse postale

                - email

                - numéro de téléphone

            a) Bouclez sur ce tableau pour afficher les informations 
            contenues (/!\ n'oubliez pas d'afficher les clés associées)

            b) idem mais en affichant le nom en majuscule et la première 
            lettre du prénom en majuscule et le reste en minuscule.
  </pre>

    <?php 
    $adress = [
      "firstPerson" => [
        "firstName" => "Roger", 
        "lastName" => "durant", 
        "cp" => 3452, 
        "email" => "roger.durant@gmail.com",
        "tel" => "0456 / 36 / 67 / 53"],
      "secondPerson" => [
        "firstName" => "Maria", 
        "lastName" => "Lydia", 
        "cp" => 7234, 
        "email" => "maria.lydia@gmail.com",
        "tel" => "0446 / 56 / 43 / 21"],
      "thirdPerson" => [
        "firstName" => "Gaby", 
        "lastName" => "Kos", 
        "cp" => 5032, 
        "email" => "gaby.kos@gmail.com",
        "tel" => "0236 / 65 / 02 / 34"], 
    ];

    foreach($adress as $adressAcess){
        echo "<p>";
        foreach($adressAcess as $key => $value) {
            echo $key . " = " . $value . "<br>";
        }
        echo "</p>";
    }
    echo "<br>";
    echo "<br>";

    foreach($adress as $adressAcess){
      echo "<p>";
      foreach($adressAcess as $key => $value) {
        if ($key === "lastName") {
            // nom en majuscules
            echo $key . " = " . strtoupper($value) . "<br>";
        } elseif ($key === "firstName") {
            // prénom : première lettre majuscule, reste minuscule
            $value = ucfirst(strtolower($value));
            echo $key . " = " . $value . "<br>";
        } else {
            // les autres infos restent inchangées
            echo $key . " = " . $value . "<br>";
        }
      }
        echo "</p>";
  }
?>
</body>

</html>  