// Écrire la fonction (lireNote) qui lit 
// au clavier un nombre entier qui doit être compris 
// entre –1 et 20. la fonction recommence la lecture
// jusqu’à ce que l’entier entré soit correct

function readNote(){
   let note = Number(prompt("Veuillez entré un nombre entre -1 et 20"));

   while (note < -1 || note > 20 ){
      note = Number(prompt("Veuillez entré un nombre entre -1 et 20"));
   }
   console.log(`Le nombre que vous avez choisi est le suivant : ${note}`);
}

readNote();