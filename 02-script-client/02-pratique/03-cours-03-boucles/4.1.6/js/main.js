// 6. Écrivez un algorithme qui calcule et 
// affiche la somme des nombres pairs et la 
// somme des nombres impairs compris entre 
// une valeur minimale positive et une valeur 
// maximale saisies par l'utilisateur (Ex : entre 50 et 90) 

let i = 0;
let numberOne = 0;
let numberTwo = 0;
let total = 0;

do {
    numberOne = Number(prompt("Veuillez entrer le premier nombre"));
    numberTwo = Number(prompt("Veuillez entrer le Deuxieme nombre"));
} while (numberOne < 1 || numberTwo < 1 || numberOne > 100 || numberTwo > 100)

console.log(`
    Voici le nombre 1 : ${numberOne}
    Voici le nombre 2 : ${numberTwo}
    `);


