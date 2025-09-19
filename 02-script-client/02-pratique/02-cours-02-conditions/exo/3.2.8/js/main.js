///// A CORRIGER /////

// 3.1.8  Écrire  un  algorithme  qui  calcule OK
// le  montant  d'une  facture OK
// comportant  une  seule  ligne  de  facture, OK
// connaissant  le  prix  unitaire  de OK
// l'article  et  le  nombre  d'articles  achetés. OK

// La  TVA  est  uniformément  de OK
// 21 %.Une  remise  sera  calculée OK
// sur  le  montant  HTVA  d'après  la  règle OK
// suivante: OK

// ●100 articles et plus: 10%
// ●1000 articles et plus:
//     ●20% si le montant HTVA est d'au moins 1000€
//     ●15% sinon


// L'algorithme  affichera  le  nombre  d'articles, OK
// le  prix  unitaire, le  montant HTVA sans remise, OK
// la remise, le montant HTVA avec remise, le taux de 21 TVA % OK
// Le taux de 21 TVA % OK
// ●100 articles et plus: 10% tva


// Exemple :

// FACTURE.
// Nombre d'articles :
// Prix unitaire :
// Montant HTVA avant remise :
// Remise :
// Montant HTVA avec remise :
// TAUX TVA (21%) :
// Montant TVA :
// Montant TVAC :

let itemPrice = 0;
let numberOfItems = 0;

itemPrice = Number(prompt("Entrez la valeure de l'article"));
numberOfItems = Number(prompt("Entrez le nombres d'articles"));

let basicBill = itemPrice * numberOfItems;
let basicVatBill = basicBill / 100 * 21;
let totalWithVatBill = basicBill + basicVatBill;

let tenVatBill = basicBill / 100 * 10;
let fifteenVatBill = basicBill / 100 * 15;
let twentyVatBill = basicBill / 100 * 20;

let priceWithTenVatBill = basicBill - tenVatBill;
let priceWithFifteenVatBill = basicBill - fifteenVatBill;
let priceWithTwentyVatBill = basicBill - twentyVatBill;


if (itemPrice <= 0 || numberOfItems <= 0) {
    console.log("Veuillez entrez des valeures positives");
}
else if (numberOfItems >= 100 && basicBill < 1000) { 
    let vatAfterDiscount = priceWithTenVatBill * 0.21;       
    let tvacAfterDiscount = priceWithTenVatBill + vatAfterDiscount; 

    console.log(`Vous avez acheter plus de 100 article(s).
        Vous bénéficier donc de 10% de TVA.
        La facture sans tva est de ${basicBill} €.
        Votre facture est de ${priceWithTenVatBill} €.
        `);
}
    // Raisonnement
// ●1000 articles et plus:
//     ●20% si le montant HTVA est d'au moins 1000€
//     ●15% sinonµ
// si article >= 100 && prix >= 1000 €
// alors 20%
    // sinon 15%
    // Fin raisonnement
else if (numberOfItems >= 1000 && basicBill >= 1000) {
    console.log(`Vous avez acheter plus de 1000 article(s).
        Vous bénéficier donc de 20% de TVA.
        La facture sans tva est de ${basicBill} €.
        Votre facture est de ${priceWithTenVatBill} €.
        `);
}
else if (numberOfItems >= 1000 && basicBill < 1000) {
    console.log(`Vous avez acheter plus de 1000 article(s).
        Le montant hors tva est de moins de 1000 €.
        Vous bénéficier donc de 15% de TVA.
        La facture sans tva est de ${basicBill} €.
        Votre facture est de ${priceWithFifteenVatBill} €.
        `)
}   
  else {
    console.log(`La valeure de l'article est de ${itemPrice} €. 
    Vous avez acheter ${numberOfItems} article(s).
    La facture sans tva est de ${basicBill} €.
    La facture avec 21% de tva est de ${totalWithVatBill} €.
    `);
}

// Raisonnement
// calcul d'un pourcentage normal

// let number = 50;
// pourcentage = 50 / 100 * 21;

// totalPourcentage = number - pourcentage;
// console.log(`Voici le nombre : ${number}.
// Voici le pourcentage : ${pourcentage}.
// Voici la valeure totale recherchée : ${totalPourcentage}
//     `);
//  Fin Raisonnement