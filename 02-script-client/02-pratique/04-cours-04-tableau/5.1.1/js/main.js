// A1 : . Écrire un algorithme qui <br>
// affiche un tableau à une dimension d'entiers <br>
// après l'avoir initialisé de telle manière que <br>
// chaque élément soit égal à son indice

let arr = [];

for (i = 1; i <= 5; i++) {
    arr[i] = i;
    console.log(`Valeur de i : ${i} valeur de arr = ${arr[i]}`);
}