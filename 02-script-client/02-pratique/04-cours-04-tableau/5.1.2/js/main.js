// A2. Écrire un algorithme qui affiche un
// tableau à une dimension d'entiers après l'avoir initialisé avec des valeurs lues au clavier.

let number = [];

for (i = 1; i <= 5; i++) {
    number[i] = Number(prompt("Veuillez entrez les nombres que vous voullez afficher"));
    console.log(`voici les nombres entrés : ${number[i]}`);
}

