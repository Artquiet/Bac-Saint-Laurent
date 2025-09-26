//    <!-- 5. Écrivez un algorithme qui calcule et affiche 
//    la somme des dix premières valeurs de 
//    la table de multiplication d’un entier 
//    positif choisi par l'utilisateur (<=100) -->

let i = 0;
let number = 0;
let sum = 0;
let total = 0;

do {
    number = Number(prompt("Veuillez entrer un nombre entre 1 et 100"));
} while (number < 1 || number > 100)
    
console.log(`le nombre que vous avez entré est le : ${number}`);
    
    for (i = 0; i < 10; i++){     
        sum = sum + number; 
        console.log(`la table de multiplication de ce nombre est la suivante : ${sum}`);
        total = sum + total;
}

console.log(`le total des nombres additionné entre eux de cette table est le nombre : ${total}`);

