// 1. Écrire la fonction (nPermut)
// qui permute deux données entières.

function reverse () {
    let a = 1;
    let b = 4;
    let c = 11;
    console.log(`
        La valeure de a est  : ${a}.
        La valeure de b est : ${b}.
        `);
    
    c = a;
    a = b;
    b = c;
    
    console.log(`
        Inversion de a et b =>
        La valeure de a est maintenant : ${a}.
        La valeure de b est maintenant : ${b}.
        `);
}

reverse();
