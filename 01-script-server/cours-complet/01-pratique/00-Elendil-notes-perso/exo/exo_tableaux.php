<pre>
Créer un script PHP qui :

* Définit une liste de matières dans un tableau indicé.

* Définit les informations d’un seul étudiant avec un tableau associatif.

* Définit une liste de plusieurs étudiants avec leurs notes dans un tableau multidimensionnel.

* Affiche les données de différentes façons : 
    - accès direct 
    - boucles for 
    - boucles foreach

* Termine par un affichage débug avec print_r et var_dump.
</pre>

<?php
//~ =======================
//~ 1. TABLEAU INDICÉ
//~ =======================

$matieres = ["Maths", "Français", "Histoire", "Informatique"];

//* Affichage avec un for
echo "<h2>Liste des matières (tableau indicé)</h2>";
for ($i = 0; $i < count($matieres); $i++) {
    echo "Matière $i : " . $matieres[$i] . "<br>";
}

//~ =======================
//~ 2. TABLEAU ASSOCIATIF
//~ =======================

$etudiant = [
    "nom" => "Alice Dupont",
    "age" => 21,
    "ville" => "Paris"
];

echo "<h2>Informations sur un étudiant (tableau associatif)</h2>";
echo "Nom : " . $etudiant["nom"] . "<br>";
echo "Âge : " . $etudiant["age"] . "<br>";
echo "Ville : " . $etudiant["ville"] . "<br>";

echo "<h3>Parcours avec foreach</h3>";
foreach ($etudiant as $cle => $valeur) {
    echo "Clé : $cle → Valeur : $valeur<br>";
}

//~ =======================
//~ 3. TABLEAU MULTIDIMENSIONNEL
//~ =======================

//* Chaque étudiant a : nom, âge, ville, et un sous-tableau de notes
$etudiants = [
    [
        "nom" => "Alice Dupont",
        "age" => 21,
        "ville" => "Paris",
        "notes" => [15, 14, 17, 16]
    ],
    [
        "nom" => "Bob Martin",
        "age" => 23,
        "ville" => "Lyon",
        "notes" => [12, 13, 11, 14]
    ],
    [
        "nom" => "Charlie Bernard",
        "age" => 20,
        "ville" => "Marseille",
        "notes" => [18, 19, 17, 20]
    ]
];

echo "<h2>Liste des étudiants avec leurs notes (tableau multidimensionnel)</h2>";

//* Boucle foreach principale
foreach ($etudiants as $etudiant) {
    echo "<strong>" . $etudiant["nom"] . "</strong><br>";
    echo "Âge : " . $etudiant["age"] . "<br>";
    echo "Ville : " . $etudiant["ville"] . "<br>";

    //& Affichage des notes avec une boucle for
    echo "Notes : ";
    for ($i = 0; $i < count($etudiant["notes"]); $i++) {
        echo $matieres[$i] . " : " . $etudiant["notes"][$i] . " | ";
    }
    echo "<br><br>";
}

//~ =======================
//~ 4.      DEBUG
//~ =======================
echo "<h2>Debug avec print_r et var_dump</h2>";

echo "<pre>";
print_r($matieres);
print_r($etudiant);
print_r($etudiants);
echo "</pre>";

echo "<pre>";
var_dump($etudiants);
echo "</pre>";
?>