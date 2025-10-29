// Réaliser une application qui analyse
// un paragraphe fourni par l’utilisateur et calcule des
// statistiques de mots.

// 1. Longueur du texte: le paragraphe doit
// contenir entre 50 et 300 mots(espaces
// multiples et ponctuation autorisées)
///////////////////////////////////////
// 2. Top 3 longueurs de mots: afficher
// les trois longueurs de mots les plus fréquentes
// (ex : 4 lettres, 5 lettres, etc.).
// En cas d’égalité, afficher toutes les
// longueurs ex æquo, avec leur nombre d’occurrences
///////////////////////////////////////
// 3. Moyenne: afficher la moyenne des occurrences
// du « top 3 » (ou du top étendu s’il y a
// des égalités)

// Réflexion Algorythmique Personelle :

// 1 ) faire une saisie de la phrase et l'afficher. OK
// 2 ) stocker la phrase dans un tableau et les séparer. OK
// 3 ) vérifier si l'utilisateur entre bien un para-
// graphe compris entre 50 et 300 mots. OK.
// 4 ) Faire un compteur pour les 3 longeur
// de mot les plus long pour pouvoir les affiché avec
// Le nombre de fois.
 
const paragraphe = prompt("Veuillez entrer un paragraphe entre 50 et 300 mots");

// ré injecter a la place de test a la fin de l'exercice. 

let test = "Je me    réjouis...vraiment ..  d'avoir ma voiture pour pouvoir allez dans les bois et décompresser un max. Une fois que je l'aurai je pourrai vraiment faire ce que je veux.Je pourrai allez me balader dans les bois et profités des paysages de ma région a ternel et eupen.test cinquante mot ou cinquante mot et plus"; 

const paragraphetraitement = test.trim().replaceAll('.', '');
// retirer les points 

const paragrapheTableau = paragraphetraitement.split(' ').filter(Boolean); //= Séparation de la chaine
// de caractère sous forme d'index et du mot associé dans le tableau.


if (paragrapheTableau.length < 50 || paragrapheTableau.length > 300) {
    console.log("Veuillez entrer au moins 50 mots ou moins de 300");
} else {
    console.log(`Voici vos 50 mots et plus : ${paragrapheTableau}`);
}

/////////////
// a suivre: gèrer l'erreur avec les points et les espaces,
// ne pas les comptabilisé dans les mots du tableau
/////////////


// renvoyé le mot le plus long du tableau ci-dessous

// let motLePlusLong = 0;
// for (let i = 0; i < paragrapheTableau.length; i++){
//     if (paragrapheTableau[i].length > motLePlusLong) {
//         motLePlusLong = paragrapheTableau[i].length;
//     }
// }
// console.log(motLePlusLong);





