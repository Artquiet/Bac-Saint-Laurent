// 👉 Affiche la table de multiplication de 7 (de 1 à 10 inclus).

let i = 0;
let number = 7;
let result = 0;

console.log("voici la table de multiplication de 7");
for (i = 1; i < 11; i++){
    result = number * i; 
    console.log(`${i} x ${number} = ${result}`);
}