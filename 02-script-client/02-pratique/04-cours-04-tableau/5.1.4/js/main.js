// A4. Écrire un algorithme qui recherche le maximum et le nombre de fois qu'il apparaît 
// dans un tableau à une dimension d'entiers initialisé à sa déclaration. L'algorithme 
// affichera le tableau avant les résultats.

const arr = [2, 9, 3, 9, 5, 9, 1, 9, 2, 9, 9, 9, 9, 1, 2, 3, 9, 2, 9];
let max = 0;
let cptMax = 0;

for (let numberMax of arr) {
    console.log(numberMax);
    if (numberMax > max) {
        max = numberMax;
    }  
}
for (i = 0; i < arr.length; i++){
    if (arr[i] === max) {
        cptMax++;
    }
}
console.log(max);
console.log(`
    le nombre maximum qui est ${max}
    est ${cptMax} fois dans le tableau. 
    `);