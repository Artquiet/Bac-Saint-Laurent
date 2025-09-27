//  Exercice (avec une boucle do…while) <br>

//       👉 Énoncé : <br>
//       Demande un nombre à l’utilisateur (via prompt) <br>
//       tant que le nombre entré n’est pas compris entre 1 et 10 inclus. <br>
let number = 0;
let i = 0;
do {
    i++;
    number = Number(prompt("Entrez un nombre entre 1 et 10 inclus."));
} while (number <= 0 || number >= 11);
console.log(`Le nombre que vous avez entré est le : ${number}`);