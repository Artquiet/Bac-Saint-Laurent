// 3.1.7 Écrire un algorithme qui chiffre
// un caractère lu au clavier d'après la règle suivante :
// ●Chaque lettre est remplacée par sa suivante dans l'alphabet
// ●Z sera remplace‚ par A, z par a
// (une majuscule reste majuscule, une minuscule reste minuscule)
// ●Chaque chiffre est remplacé par son suivant (9 sera remplacé par 0)
// ●Tout autre caractère sera remplacé par le caractère *
// ●L'algorithme affichera le caractère crypté
// ●Obtenir la valeur Unicode d'un caractère :
// let str = 'pomme';
// let code = str.charCodeAt(0);
///// premier caractère de la variable str
// ●Obtenir un caractère à partir d'une valeur Unicode :
// let caractere = String.fromCharCode(code + 1);
///// retourne 'q'

userInput = prompt("Veuillez introduire une lettre ou un nombre");
let process = userInput.charCodeAt(0);
if (process >= 65 && process <= 90) {
    if (process === 90) {
        process = userInput;
        userInput = "A";
        console.log(userInput);
    } else {
        process = String.fromCharCode(process + 1);
        userInput = process;
        console.log(userInput);
    }
}
else if (process >= 97 && process <= 122) {
    if (process === 122) {
        process = userInput;
        userInput = "a";
        console.log(userInput);
    } else {
        process = String.fromCharCode(process + 1);
        userInput = process;
        console.log(userInput);
    }
}
else if (process >= 48 && process <= 57) {
    if (process === 57) {
        process = userInput;
        userInput = 0;
        console.log(userInput);
    } else {
        process = String.fromCharCode(process + 1);
        userInput = process;
        console.log(userInput);
    }
} else {
    console.log("*");
}





