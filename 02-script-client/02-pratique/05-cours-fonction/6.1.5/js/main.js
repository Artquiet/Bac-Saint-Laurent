// Même question que 4, mais la fonction pose la question 3 
// fois au plus, si au bout des trois essais l’entier 
// entré n’est pas correct, la fonction met fin au programme 

function readNote(){
   let note = Number(prompt("Veuillez entré un nombre entre -1 et 20"));
  
      while (note < -1 || note > 20 ){
         note = Number(prompt("Veuillez entré un nombre entre -1 et 20"));
      }
      console.log(`Le nombre que vous avez choisi est le suivant : ${note}`) 
}

readNote();