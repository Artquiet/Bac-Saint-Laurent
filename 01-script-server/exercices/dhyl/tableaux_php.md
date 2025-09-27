# 1/ Tableau indicé

## Créer le tableau

- Avec la syntaxe `array()` :
    ```php
    $fruits = array("Pomme", "Banane", "Cerise");
    ```

- Avec les crochets `[]` (plus moderne) :
    ```php
    $fruits = ["Pomme", "Banane", "Cerise"];
    ```

- En ajoutant les éléments un par un :
    ```php
    $fruits = []; // tableau vide
    $fruits[] = "Pomme";
    $fruits[] = "Banane";
    $fruits[] = "Cerise";
    ```

- En définissant les indices manuellement :
    ```php
    $fruits = [];
    $fruits[0] = "Pomme";
    $fruits[2] = "Banane"; // saut d’indice possible
    $fruits[5] = "Cerise";
    ```

## Affichage des données

- Accès direct par indice :
    ```php
    echo $fruits[0]; // Affiche "Pomme"
    ```

- Avec une boucle `for` :
    ```php
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . "\n";
    }
    ```

- Avec une boucle `foreach` :
    ```php
    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    }
    ```

- Avec `foreach` et les indices :
    ```php
    foreach ($fruits as $index => $fruit) {
        echo "Indice $index : $fruit\n";
    }
    ```

## Fonctions utiles

- Affiche la structure du tableau :
    ```php
    print_r($fruits);       
    ```

- Affiche plus de détails (types, tailles) :
    ```php
    var_dump($fruits);
    ```

- Affiche le nombre d'éléments dans le tableau :
    ```php
    echo count($fruits);       
    ```

---

# 2/ Tableau associatif

## Créer le tableau

- Avec `array()` :
    ```php
    $etudiant = array(
        "nom" => "Alice",
        "age" => 25,
        "ville" => "Paris"
    );
    ```

- Avec la syntaxe moderne `[]` :
    ```php
    $etudiant = [
        "nom" => "Alice",
        "age" => 25,
        "ville" => "Paris"
    ];
    ```

- En ajoutant les éléments un par un :
    ```php
    $etudiant = []; // tableau vide
    $etudiant["nom"] = "Alice";
    $etudiant["age"] = 25;
    $etudiant["ville"] = "Paris";
    ```

## Affichage des données

- Accès direct par clé :
    ```php
    echo $etudiant["nom"];   // Affiche "Alice"
    echo $etudiant["age"];   // Affiche 25
    echo $etudiant["ville"]; // Affiche "Paris"
    ```

- Avec une boucle `foreach` (valeurs seulement) :
    ```php
    foreach ($etudiant as $valeur) {
        echo $valeur . "<br>";
    }
    ```

- Avec une boucle `foreach` (clés et valeurs) :
    ```php
    foreach ($etudiant as $cle => $valeur) {
        echo "Clé : $cle, Valeur : $valeur<br>";
    }
    ```

---

# 3/ Tableau multidimensionnel

## Créer le tableau

- Tableau simple (2D) avec `array()` :
    ```php
    $personnes = array(
        array("Alice", 25, "Paris"),
        array("Bob", 30, "Lyon"),
        array("Charlie", 22, "Marseille")
    );
    ```

- Avec la syntaxe moderne `[]` :
    ```php
    $personnes = [
        ["Alice", 25, "Paris"],
        ["Bob", 30, "Lyon"],
        ["Charlie", 22, "Marseille"]
    ];
    ```

- Avec des indices personnalisés (associatif) :
    ```php
    $personnes = [
        "Alice" => ["age" => 25, "ville" => "Paris"],
        "Bob"   => ["age" => 30, "ville" => "Lyon"],
        "Charlie" => ["age" => 22, "ville" => "Marseille"]
    ];
    ```

## Affichage des données

- Accès direct :
    ```php
    echo $personnes[0][0]; // Affiche "Alice"
    echo $personnes[1][2]; // Affiche "Lyon"
    ```

- Avec une boucle `for` imbriquée :
    ```php
    for ($i = 0; $i < count($personnes); $i++) {
        for ($j = 0; $j < count($personnes[$i]); $j++) {
            echo $personnes[$i][$j] . " ";
        }
        echo "<br>";
    }
    ```

- Avec des boucles `foreach` imbriquées :
    ```php
    foreach ($personnes as $personne) {
        foreach ($personne as $info) {
            echo $info . " ";
        }
        echo "<br>";
    }
    ```

- Avec `foreach` et clés nommées :
    ```php
    foreach ($personnes as $nom => $infos) {
        echo "Nom : $nom<br>";
        echo "Âge : " . $infos["age"] . "<br>";
        echo "Ville : " . $infos["ville"] . "<br><br>";
    }
    ```