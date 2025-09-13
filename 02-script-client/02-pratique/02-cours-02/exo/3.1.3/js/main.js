//  3.1.3 Écrire un algorithme qui détermine 
// si un nombre entier non négatif 
// lu au clavier est pair ou impair. 
// L'algorithme affichera le message 
// approprié parmi les suivants: 
// "Le nombre est pair", "Le nombre est 
// impair".

let number = Number(prompt("Vérification nombre entier positif est pair ou impair"));

if (number > 0 && number % 2 === 0) {
    console.log("Le nombre est positif et pair");    
} 
else if (number > 0 && number % 2 === 1) {
    console.log("Le nombre est positif et impair");    
}  else {
    console.log("Le nombre est negatif");
}