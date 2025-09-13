// 3.1.5 Écrire un algorithme qui détermine
// si un nombre entier lu au clavier
// est  nul = 0,  positif  ou  négatif.
// L'algorithme  affichera  le  message  approprié
// parmi les suivants: "Nombre positif",
// "Nombre négatif", "Nombre nul".

let number;

number = Number(prompt("Veuillez entrer un nombre nul, positif ou négatif"));

if (number === 0) {
    console.log("La valeur entrée est nulle");
} else if (number > 0) {
    console.log("La valeur entrée est positive");
} else {
    console.log("La valeur entrée est négative");
}

