let number = Number(prompt("veuillez saisir un nombre null ou non null", ""));

if (number === 0) {
    console.log(`
    Le nombre que vous avez entré est le suivant :   
    ${number}
    Ce nombre est bien null
    `);
}
else {
    console.log(`
    Le nombre que vous avez entré est le suivant :   
    ${number}
    Ce nombre n'est pas null
    `);
}

