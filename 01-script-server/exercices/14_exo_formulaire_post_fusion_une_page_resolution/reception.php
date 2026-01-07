<?php 

$nom = isset($_POST["nom"]) ? $_POST["nom"] : ""; 
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : ""; 
$email = isset($_POST["email"]) ? $_POST["email"] : ""; 
$message = isset($_POST["message"]) ? $_POST["message"] : ""; 


if(
    empty($nom) || 
    empty($prenom) ||
    empty($email) ||
    empty($message) 
    ) {
        if(empty($nom)){
            echo "nom invalide <br>";
        }
        if(empty($prenom)){
            echo "prenom invalide <br>";
        }
        if(empty($email)){
            echo "email invalide <br>";
        }
        if(empty($message)){
            echo "message invalide";
        }
    } else {
        echo "Toutes les données ont bien été validées";
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Formulaire POST  </title>
</head>
<body>
    <form action="formulaire.php" method="post" >
        <input name="nom" type="hidden" value="<?php echo $nom ?>"/>
        <input name="prenom" type="hidden" value="<?php echo $prenom ?>"/>
        <input name="email" type="hidden" value="<?php echo $email ?>" />
        <input name="message" type="hidden" value="<?php echo $message ?>" />
        <input type="submit" value="Corriger"/>
    </form>
</body>
</html>