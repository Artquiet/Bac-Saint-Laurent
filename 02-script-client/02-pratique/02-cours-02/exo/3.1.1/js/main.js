// 3.1.1 Écrire un algorithme qui détermine si un nombre entier lu au clavier 
// est nul ou pas. L'algorithme affichera le message approprié parmi les 
// suivants: "Le nombre est nul", "Le nombre n'est pas nul".

let numberIsNul = 0;

let verificationNumber = Number(prompt("Tapez un nombre pour vérifier si il est null ou pas"));

if (verificationNumber === 0) {
    console.log("Le nombre est nul");
} else {
    console.log("Le nombre n'est pas nul");
}