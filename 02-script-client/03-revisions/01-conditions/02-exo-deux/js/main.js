let number = Number(prompt("Entrez un nombre null, positif ou negatif"));

if (number === 0) {
    console.log(
        `
        Le nombre entré au clavier est le suivant :
        ${number}
        Ce nombre est Null
        `
    );
} else if (number > 0) {
    console.log(
        `
        Le nombre entré au clavier est le suivant :
        ${number}
        Ce nombre est Positif 
        `
    );
} else {
    console.log(
        `
        Le nombre entré au clavier est le suivant :
        ${number}
        Ce nombre est Négatif 
        `
    );
}