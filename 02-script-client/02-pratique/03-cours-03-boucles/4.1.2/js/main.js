// 2. Écrivez un algorithme affichant les dix premières valeurs 
// de la table de multiplication d’un entier 
// choisi par l'utilisateur (compris entre 2 et 20)

let number = 0;
let sumOfNumber = 0;
let i = 0;

do {
    number = Number(prompt("veuillez entrer une valeure entre 2 et 20 inclus."));
} while (number <= 1 || number >= 21);

console.log(`Voici la valeure que vous avez entrée : ${number}`);

for (i = 0; i < 10; i++){
    sumOfNumber = number + sumOfNumber;
    console.log(sumOfNumber);
}

