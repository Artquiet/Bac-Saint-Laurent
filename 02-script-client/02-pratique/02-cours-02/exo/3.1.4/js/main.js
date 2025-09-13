// 3.1.4 Écrire un algorithme qui détermine si 
// un nombre entier lu au clavier 
// est égal à 30, 40 ou 50. 
// L'algorithme affichera le message approprié 
// parmi les suivants: "Valeur correcte", 
// "Valeur incorrecte".

let number = Number(prompt("Entrez soit 30, 40 ou 50"));

if (number === 30 || number === 40 || number === 50) {
    console.log("Valeure entrée correcte");
} else {
    console.log("Valeure entrée incorecte");
}