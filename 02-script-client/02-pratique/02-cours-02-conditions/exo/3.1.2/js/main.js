// 3.1.2 Écrire un algorithme qui détermine si un nombre entier
//  non nul lu au clavier est positif ou négatif.
//  L'algorithme affichera le message 
// approprié parmi les suivants: 
// "Le nombre est positif", "Le nombre est 
// négatif".

let numberIsPositive = Number(prompt("Tapez un nombre pour vérifier si il est positif ou negatif"));

if (numberIsPositive > 0) {
    console.log("Le nombre est positif");
} else {
    console.log("Le nombre est negatif");
}

