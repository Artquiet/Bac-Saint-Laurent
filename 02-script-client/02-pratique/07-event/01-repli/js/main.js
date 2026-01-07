// Une  fonctionnalité  de  repli  ou
// d'expansion  d'un  bloc  DIV  
// lors d'un click sur son titre

const title = document.querySelector(".title");
const box = document.querySelector(".box");

title.addEventListener("click", expandClick);
title.removeEventListener("click", removeContentClick, true);

function expandClick(){
    box.textContent = "le texte";
}

function removeContentClick(){
    box.textContent = "modifié";
}

