// Créez un objet selon les deux méthodes avec, 
// au minimum, les 
// attributs et méthodes suivantes :
// –Prix HTVA
// –Taux de TVA
// –Calcul du prix TVAC

const Pantalon1 = {
    prixHTVA: 55,
    tauxTva: 0.21,
}

function ArticlePantalon (prixHTVA, tauxTva){
    this.prixHTVA = prixHTVA;
    this.tauxTva = tauxTva;
    return (prixHTVA * tauxTva);
}

console.log(Pantalon1);

