//    <h1>
//       Énoncé (super basique)
//     </h1>
//     <p>
//         👉 Affiche les nombres de 1 à 5 en console.log avec :
//     </p>
//     <ul>
//         <li> une boucle while </li>
//         <li> une boucle do…while </li>
//         <li> une boucle for</li>
//     </ul>

let number = 0;

while (number < 5) {
    number++;
    console.log(`"Ceci est la boucle while" : ${number}`);
}

number = 0;

do {
    number++;
    console.log(`"Ceci est la boucle do while" : ${number}`);
} while (number < 5)

for (number = 1; number < 6; number++){
    console.log(`"Ceci est la boucle for" : ${number}`);
}

// for (number = 0; number < 5; number++){
//     console.log(`"Ceci est la boucle for" : ${number}`); 
// }