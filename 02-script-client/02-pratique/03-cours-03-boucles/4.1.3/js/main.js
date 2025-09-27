// 3. Écrivez un algorithme affichant la somme
//   des nombres entier  positifs inférieurs
//   à 1000 et divisibles par 3 ou 5

let i = 0;
let sum = 0;

for (i = 1; i < 1000; i++){
    if (i % 3 === 0 || i % 5 === 0) {
        sum = sum + i;
    }
}
console.log(sum);