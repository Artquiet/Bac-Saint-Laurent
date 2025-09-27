// A3. Écrire un algorithme qui recherche le
// maximum d'un tableau à une dimension
// d'entiers initialisé à sa déclaration.
// L'algorithme affichera le tableau avant le résultat

const arr = [19, 78, 3, 6, 8];
let maxNumber = 0;

for (const number of arr) {
    console.log(number);
    if (maxNumber < number) {
        maxNumber = number;
    }
}
console.log(maxNumber);
