<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Post And Get </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        // 1) action = le script vers lequel les info sont envoyées.
        //   boutton submit -> action c'est la destination du script
        // 1.1) donnée vide ou non 
        // 2 ) champ name = php et champ id = js (Envoi de donnée.)
        // 3 ) camp value = 

        // 4 ) Ne pas utiliser les attributs tel que min, max, etcc 
        // Sinon on peut pas manipuler en php, il faut enlevé.

        // 5 ) Faire attention à deux choses => Verification que 
        // L'utilisateur ne rentre pas n'importe quoi et vérifier que 
        // Un black hat n'attaque pas le code ... Avant la validation + 
        // L'envoie.
        
        // 6 ) Isset = vérifier si la donnée existe, bolléen, 
        // Empty = vérifier si la donnée est vide, bolléen.
    ?>
    <h1>Formulaire HTML</h1>
    <form action="formulaire.php" method="post">
        <div class="c100">
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class="c100">
            <label for="mail">Email : </label>
            <input type="email" id="mail" name="mail">
        </div>
        <div class="c100">
            <label for="age">Age : </label>
            <input type="number" id="age" name="age">
        </div>
        <div class="c100">
            <input type="radio" id="femme" name="sexe" value="femme">
            <label for="femme">Femme</label>
            <input type="radio" id="homme" name="sexe" value="homme">
            <label for="homme">Homme</label>
            <input type="radio" id="autre" name="sexe" value="autre">
            <label for="autre">Autre</label>
        </div>
        <div class="c100">
            <label for="pays">Pays de résidence :</label>
            <select id="pays" name="pays">
                <optgroup label="Europe">
                    <option value="france">France</option>
                    <option value="belgique">Belgique</option>
                    <option value="suisse">Suisse</option>
                </optgroup>
                <optgroup label="Afrique">
                    <option value="algerie">Algérie</option>
                    <option value="tunisie">Tunisie</option>
                    <option value="maroc">Maroc</option>
                    <option value="madagascar">Madagascar</option>
                    <option value="benin">Bénin</option>
                    <option value="togo">Togo</option>
                </optgroup>
                <optgroup label="Amerique">
                    <option value="canada">Canada</option>
                </optgroup>
            </select>
        </div>
        <div class="c100" id="submit">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>