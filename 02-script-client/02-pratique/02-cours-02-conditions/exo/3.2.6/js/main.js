// 3.1.6 Écrire un algorithme qui recherche
// et affiche le maximum parmi 5
// nombres entiers lus au clavier.
// La recherche du maximum se fera au fur
// et à mesure des entrées successives.
// Il n'est donc pas question d'utiliser 5
// données  différentes  pour  mémoriser
// les  valeurs  des  5  nombres,
// l'algorithme n'utilisera pour ce faire
// qu'une seule variable.
// debugger;
const numbers = [25, 5, 35, 10, 4];
let maxNumber = 0;
for (let i = 0; i < numbers.length; i++) {
   
    const currentNumber = numbers[i];
    const numbersVerification = currentNumber > maxNumber;
    if (numbersVerification) {
        maxNumber = currentNumber;
    }
}
console.log(maxNumber);