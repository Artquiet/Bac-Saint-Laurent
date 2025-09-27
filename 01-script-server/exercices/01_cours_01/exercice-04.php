<!-- 
- Créer une variable titre contenu H1
- Créer une variable sous titre contenu H2
- Créer une variable texte contenu p avec du lorem ipsum
- Afficher à l'écran le tout + commentaires html avec notre
prénom et nom 
  -->
<?php 

$titre = "titre";
$soustitre = "sous titre";
$texte = "texte";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <h1> <?php echo $titre ?> </h1>
  <h2> <?php echo $soustitre ?> </h2>
  <p> <?php echo $texte ?> </p>
</body>
</html>