<!-- 
 Afficher un message de bienvenue
 en le personnalisant grâce à une variable
 dans une balise html -> h1
  -->
<?php
$firstName = "Robert";

"<!DOCTYPE html>
<html>

<body>
    <h1> echo Bienvenue $firstName </h1>
</body>
</html>"
?>
<!-- ------------------ correction------------- -->

  <?php 
    $nom = "paul";
  ?> 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php 
    echo "<h1> Bienvenue $nom </h1>"
  ?>  
</body>
</html>