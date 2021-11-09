let monTableauOrig = [
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 2, 2, 2, 2, 2, 2, 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, 2, 0],
    [0, 2, 0, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 2, 0],
    [2, 2, 0, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 2, 2],
    [0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0],
    [0, 2, 0, 0, 2, 0, 2, 0, 0, 0, 0, 0, 2, 0, 2, 0, 0, 2, 0],
    [0, 2, 2, 2, 2, 0, 2, 2, 2, 0, 2, 2, 2, 0, 2, 2, 2, 2, 0],
    [0, 0, 0, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 0, 0],
    [0, 1, 1, 0, 2, 0, 2, 2, 2, 2, 2, 2, 2, 0, 2, 0, 1, 1, 0],
    [0, 0, 0, 0, 2, 0, 2, 0, 0, 1, 0, 0, 2, 0, 2, 0, 0, 0, 0],
    [2, 2, 2, 2, 2, 2, 2, 0, 1, 1, 1, 0, 2, 2, 2, 2, 2, 2, 2],
    [0, 0, 0, 0, 2, 0, 2, 0, 0, 1, 0, 0, 2, 0, 2, 0, 0, 0, 0],
    [0, 1, 1, 0, 2, 0, 2, 2, 2, 2, 2, 2, 2, 0, 2, 0, 1, 1, 0],
    [0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0],
    [0, 2, 2, 2, 2, 2, 2, 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, 2, 0],
    [0, 2, 0, 0, 2, 0, 0, 0, 2, 0, 2, 0, 0, 0, 2, 0, 0, 2, 0],
    [0, 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 2, 2, 0],
    [0, 0, 2, 0, 2, 0, 2, 0, 0, 0, 0, 0, 2, 0, 2, 0, 2, 0, 0],
    [0, 2, 2, 2, 2, 0, 2, 2, 2, 0, 2, 2, 2, 0, 2, 2, 2, 2, 0],
    [0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0],
    [0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
];
let monTableau = []
for (let i in monTableauOrig) {
    monTableau.push(monTableauOrig[i].slice())
}
let score = 0

let myPac = {
    x: 4,
    y: 5,
    direction: 4
}
let tabFant = [{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
},
{
    x: 9,
    y: 10,
    direction: 4
}
]
function init() {
    monTableau = []
    for (let i in monTableauOrig) {
        monTableau.push(monTableauOrig[i].slice())
    }
    myPac.x = 4
    myPac.y = 5
    myPac.direction = 4
    for (let i in tabFant) {
        tabFant[i].x = 9
        tabFant[i].y = 10
    }
}
function modifTab() {
    let tabA = [1, 2, 3]
    //let tabB = [...tabA]
    let tabB = tabA.slice()
    tabB[0] = 7
    console.log('tableaux', tabA, tabB)
}
function afficheGrille() {
    //On attrape le contener avec le getElement
    let contener = document.getElementById('contener')
    //On vide le  contener avant de le remplir
    contener.innerHTML = ""

    for (let i in monTableau) {
        for (let j in monTableau[i]) {

            //Je créé un element div que je stocke dans ma variable
            // <div></div>
            let monElem = document.createElement('div');

            // à l'intérieur de l'élément monElem je mets le contenu 
            // de la case du tableau
            //  monElem.innerHTML = monTableau[i][j]
            if (monTableau[i][j] == 0) {
                monElem.classList.add("mur")
            } else if (monTableau[i][j] == 1) {
                monElem.classList.add("sol")
            } else if (monTableau[i][j] == 2) {
                monElem.classList.add("bonbon")
            }
            monElem.style.gridRow = (+i + 1)
            monElem.style.gridColumn = (+j + 1)


            //on ajoute l'element div dans la page
            contener.appendChild(monElem)

        }
    }
    //  console.log(monTimer)


}
function movePacaman() {
    if (myPac.direction == 1) {
        myPac.x++
        if (myPac.x > (monTableau[0].length - 1)) {
            myPac.x = 0
        }
    }
    else if (myPac.direction == 2) {
        myPac.y++
        if (myPac.y > (monTableau.length - 1)) {
            myPac.y = 0
        }
    }
    else if (myPac.direction == 3) {
        myPac.x--
        if (myPac.x < 0) {
            myPac.x = monTableau[0].length - 1
        }
    }
    else if (myPac.direction == 4) {
        myPac.y--
        if (myPac.y < 0) {
            myPac.y = monTableau.length - 1
        }
    }
}
function nbAleat(min, max) {
    let aleat = Math.random()
    aleat = aleat * (max - min)
    aleat = aleat + min
    aleat = Math.floor(aleat)
    return aleat
}
function moveFantome(num) {
    tabFant[num].direction = nbAleat(1, 5)
    if (tabFant[num].direction == 5) tabFant[num].direction = 1

    if (tabFant[num].direction == 1) {
        tabFant[num].x++
        if (tabFant[num].x > (monTableau[0].length - 1)) {
            tabFant[num].x = 0
        }
    }
    else if (tabFant[num].direction == 2) {
        tabFant[num].y++
        if (tabFant[num].y > (monTableau.length - 1)) {
            tabFant[num].y = 0
        }
    }
    else if (tabFant[num].direction == 3) {
        tabFant[num].x--
        if (tabFant[num].x < 0) {
            tabFant[num].x = monTableau[0].length - 1
        }
    }
    else if (tabFant[num].direction == 4) {
        tabFant[num].y--
        if (tabFant[num].y < 0) {
            tabFant[num].y = monTableau.length - 1
        }
    }
}
function collisionPac() {

    // console.log('valeur de la case du tableau à la place de pacman :' + monTableau[myPac.y][myPac.x])
    //On test si à la position du pacman il y a un mur
    if (monTableau[myPac.y][myPac.x] == 0) {
        //en fonction de la direction de pacman if else if on deplace pacman sans changer la direction
        if (myPac.direction == 1) {
            myPac.x--
        }
        else if (myPac.direction == 2) {
            myPac.y--
        }
        else if (myPac.direction == 3) {
            myPac.x++
        }
        else if (myPac.direction == 4) {
            myPac.y++
        }
    }

}

function collisionFant(num) {

    // console.log('valeur de la case du tableau à la place de pacman :' + monTableau[myPac.y][myPac.x])
    //On test si à la position du pacman il y a un mur
    if (monTableau[tabFant[num].y][tabFant[num].x] == 0) {
        //en fonction de la direction de pacman if else if on deplace pacman sans changer la direction
        if (tabFant[num].direction == 1) {
            tabFant[num].x--
        }
        else if (tabFant[num].direction == 2) {
            tabFant[num].y--
        }
        else if (tabFant[num].direction == 3) {
            tabFant[num].x++
        }
        else if (tabFant[num].direction == 4) {
            tabFant[num].y++
        }
    }

}

function affichePacMan() {
    //On attrape le contener avec le getElement
    let contener = document.getElementById('contener')

    //Je créé un element div que je stocke dans ma variable
    // <div></div>
    let monElem = document.createElement('div');
    monElem.classList.add("pacman")

    //On place le pacMan
    monElem.style.gridRow = (+myPac.y + 1)
    monElem.style.gridColumn = (+myPac.x + 1)
    //on ajoute l'element div dans la page
    contener.appendChild(monElem)
}

function afficheFantome(num) {
    //On attrape le contener avec le getElement
    let contener = document.getElementById('contener')

    //Je créé un element div que je stocke dans ma variable
    // <div></div>
    let monElem = document.createElement('div');
    monElem.classList.add("fantome" + (num % 4))

    //On place le pacMan
    monElem.style.gridRow = (+tabFant[num].y + 1)
    monElem.style.gridColumn = (+tabFant[num].x + 1)
    //on ajoute l'element div dans la page
    contener.appendChild(monElem)
}

function appuisTouche(e) {
    if (e.key == "d") {
        myPac.direction = 1
    }
    else if (e.key == "s") {
        myPac.direction = 2
    }
    else if (e.key == "q") {
        myPac.direction = 3
    }
    else if (e.key == "z") {
        myPac.direction = 4
    }
}

function mangeBonbon() {
    if (monTableau[myPac.y][myPac.x] == 2) {
        monTableau[myPac.y][myPac.x] = 1
        score = score + 10
    }
    let scoreElem = document.getElementById('score')
    scoreElem.innerHTML = "Score : " + score
}
function testPerdu(num) {
    if (myPac.y == tabFant[num].y && myPac.x == tabFant[num].x) {
        //On a perdu
        stopTimer()
        afficheGrille()
        affichePacMan()
        for (let i in tabFant) {
            afficheFantome(i)
        }
        setTimeout(perd, 10)

    }
}
function testGagne() {
    //on mets une variable pour savoir s'il reste des bonbons
    let resteBonbon = false
    //On parcours tout le tableau
    for (let i in monTableau) {
        for (let j in monTableau[i]) {
            //Si il reste un bonbon
            if (monTableau[i][j] == 2) {
                resteBonbon = true
            }
        }
    }
    if (resteBonbon == false) {
        stopTimer()
        setTimeout(gagne, 10)
    }
}
function perd() {
    alert('Vous avez perdu')
}
function gagne() {
    alert('Vous avez gagné')
}
function tourJeu() {
    movePacaman()
    collisionPac()
    mangeBonbon()
    for (let i in tabFant) {
        testPerdu(i)
        moveFantome(i)
        collisionFant(i)
        testPerdu(i)
    }



    afficheGrille()
    affichePacMan()
    for (let i in tabFant) {
        afficheFantome(i)
    }

    testGagne()
}
/* Méthode avec setInterval */
// //Demarre un timer qui appelle la fonction afficheGrille toutes les 500 ms et stocke le numéro de timer dans la variable monTimer
monTimer = setInterval(tourJeu, 500)

// function demarreTimer() {
//     //Stope le timer ayant pour numéro monTimer
//     clearInterval(monTimer)
//     monTimer = setInterval(afficheGrille, 500)
// }
function stopTimer() {
    //Stope le timer ayant pour numéro monTimer
    clearInterval(monTimer)
}

// /* Méthode avec setTimeout */
// //stopTimer avec interval
// function stopTimer() {
//     //Stope l'interval en modifiant la variable
//     stopT = true
// }

// //appelle la fonction une première fois
// setTimeout(afficheGrille, 500)

/* Méthode avec while */
// //On ne fais jamais, boucle infinie c'est mal....
// while (1) {
//     afficheGrille()
// }