// 2. Écrire la fonction (nMax) qui calcule 
// la plus petite de deux données entières

function minNumber () {
   let numberOne = 15;
   let numberTwo = 10;

      console.log(`
         Valeure du premier numero : ${numberOne}
         Valeure du deuxieme numero : ${numberTwo}
      `);

   if (numberOne < numberTwo) {
      console.log(` La plus petite valeure est la premiere : ${numberOne}`);
   } else {
      console.log(` La plus petite valeure est la deuxieme : ${numberTwo}`);
   }
}

minNumber();
