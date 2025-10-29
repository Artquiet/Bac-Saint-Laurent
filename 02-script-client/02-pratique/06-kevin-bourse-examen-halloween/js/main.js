let tailleActuelle = 0;
let moyenneTopTroisOccurence = 0;

const paragraphe = prompt("Veuillez entrer un paragraphe entre 50 et 300 mots");
const paragraphetraitement = paragraphe.trim().replaceAll('.', '');
const paragrapheTableau = paragraphetraitement.split(' ').filter(Boolean); 
const tableauTailleOccurence = [[0, 0, 0], [0, 0, 0]];

if (paragrapheTableau.length < 50 || paragrapheTableau.length > 300) {
    console.log("Veuillez entrer au moins 50 mots ou moins de 300");
} else {
    console.log(`Voici vos 50 mots et plus : ${paragrapheTableau}`);
}

for (let i = 0; i < paragrapheTableau.length; i++){
    tailleActuelle = paragrapheTableau[i].length;
    if (tailleActuelle > tableauTailleOccurence[0][0]) {
        tableauTailleOccurence[0][0] = tailleActuelle;
        tableauTailleOccurence[1][0] = 1;
    } else if (tailleActuelle === tableauTailleOccurence[0][0]) {
        tableauTailleOccurence[1][0]++;  
    }
    else if (tailleActuelle > tableauTailleOccurence[0][1]) {
        tableauTailleOccurence[0][1] = tailleActuelle;
        tableauTailleOccurence[1][1] = 1;
    }
    else if (tailleActuelle === tableauTailleOccurence[0][1]) {
        tableauTailleOccurence[1][1]++;  
    }
    else if (tailleActuelle > tableauTailleOccurence[0][2]) {
        tableauTailleOccurence[0][2] = tailleActuelle;
        tableauTailleOccurence[1][2] = 1;
    } 
    else if (tailleActuelle === tableauTailleOccurence[0][2]) {
        tableauTailleOccurence[1][2]++;  
    }
}

for (let i = 0; i < tableauTailleOccurence[1].length; i++) {
    moyenneTopTroisOccurence = moyenneTopTroisOccurence + tableauTailleOccurence[1][i];
}

moyenneTopTroisOccurence = moyenneTopTroisOccurence / tableauTailleOccurence[1].length;

console.log(
    `
    Le premier mot le plus long est de ${tableauTailleOccurence[0][0]} lettres.
    --- ${tableauTailleOccurence[1][0]} occurences.
    Le deuxieme mot le plus long est de ${tableauTailleOccurence[0][1]} lettres.
    --- ${tableauTailleOccurence[1][1]} occurences.
    Le troisieme mot le plus long est de ${tableauTailleOccurence[0][2]} lettres.
    --- ${tableauTailleOccurence[1][2]} occurences.
    -----
    La moyenne des trop trois occurences est de : ${(moyenneTopTroisOccurence)}
    -----
    `
);





