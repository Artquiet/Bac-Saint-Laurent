<?php
$nom = isset($_POST["nom"]) ? $_POST["nom"] : ""; 
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : ""; 
$email = isset($_POST["email"]) ? $_POST["email"] : ""; 
$message = isset($_POST["message"]) ? $_POST["message"] : ""; 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire POST </title>
</head>
<body>
    <h1> Exercice formulaire POST </h1>
    <form action="reception.php" method = "post">
        <div class="style_form">
            <label for="nom"> Nom : </label>
            <input type="text" name="nom" value="<?php echo $nom; ?>"/>
        </div>
          <div class="style_form">
            <label for="prenom"> Prenom : </label>
            <input type="text" name="prenom" value="<?php echo $prenom; ?>"/>
        </div>
        <div class="style_form">
            <label for="mail"> E - Mail : </label>
            <input type="email" name="email" value="<?php echo $email; ?>"/>
        </div>
        <div class="style_form">
            <label for="message"> Message : </label>
            <input type="textarea" name="message" value="<?php echo $message; ?>"/>
        </div>
        <div class="style_form">
            <input type="submit" value="Envoyez" />
        </div>
        
    </form>
</body>
</html>