// A5. Écrire un algorithme qui recherche, dans un tableau à une dimension d'entiers
// initialisé à sa déclaration le maximum, le nombre de fois qu'il apparaît et la position
// où il apparaît pour la première fois. L'algorithme affichera le tableau avant les résultats.

let arr = [4, 2, 34, 4, 8, 34, 4, 5, 34, 9, 34, 1, 4];
let maxNumber = 0;
let numberOfMaxNumber = 0;
let positionMaxNumber = 0;

console.log(`Voici les valeures du tableau :  ${arr} `);

for (const numbersArr of arr) {
    if (numbersArr > maxNumber) {
        maxNumber = numbersArr;
    }
}

for (i = 0; i < arr.length; i++){
    if (arr[i] === maxNumber) {
        numberOfMaxNumber++;
    }
}

for (let position in arr){
    if (arr[position] === maxNumber) {
        positionMaxNumber = position;
        break;
    }
}

console.log(`le nombre maximum est le ${maxNumber}`);
console.log(`le nombre ${maxNumber} et présent ${numberOfMaxNumber} fois dans le tableau`);
console.log(`la position du plus grand nombre est la suivante : ${positionMaxNumber}`);