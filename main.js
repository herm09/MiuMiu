// const logo = document.querySelector(".imglogo"); //Permet d'accéder au logo et de faire des changements depuis main js
// const suggestions = document.querySelector(".suggestions");
// let interrupteur = false; //variable qui sera soit vraie soit fausse : booléan
// const bouton = document.querySelector(".BoutonDiv button"); //on a maintenant accès au bouton "post"
// const body = document.querySelector("body"); //pas de point car ce n'est pas moi qui ai crée la class
// let toggle2 = false; //si toggle2 est faux la fenêtre pour le tweet est fermé

// logo.addEventListener("click", (event) => { //quand on va cliquer sur le logo on va lancer l'évènement click Tout ce qui entre crochet est ce qui va se passer en cliquant
//     suggestions.style.right = "0%";
//     interrupteur = !interrupteur; //interrupteur est égal à son contraire
//     if (interrupteur == false) {
//         suggestions.style.right = "0%"; //si interrupteur est faux, le menu suggestion va se dérouler
//     } else {
//         suggestions.style.right = "-50%";
//     }
// });

// bouton.addEventListener("click", (event) => {
//     const div = document.createElement("div"); //div va être un nouvel element que l'on va appeler "div"
//     div.classList.add("Modal"); //ajoute un nom de class à la div qui vient d'être crée
//     div.style.width = "100%";
//     div.style.height = "100%";
//     div.style.backgroundColor = "black"; //mettre la couleur de la div en noir
//     div.style.zIndex = "2"; //permet de le mettre au premier plan
//     div.style.position = "fixed"; //pour que ça ne dépende pas des atres divs et qu'il se mette au premier plan peu importe "quand"
//     div.style.top = "0%"; //permet que ça se mette tout en haut, que ça colle le haut de la page et que ça colle le bas
//     div.style.opacity = "80%"; //permet d'assombrir la div
//     div.style.color = "white"; //pour que tout le texte dans la div soit en blanc
//     div.style.display = "flex"; //pour que la div soit en display flex (position flexible des éléments par rapport à la taille de la div)
//     div.style.justifyContent = "space-around"; //place les éléments par rapport à l'espace qu'il y a autour d'eux pour que ça occupe tout l'espace
//     div.insertAdjacentHTML("beforeend",'<p>Hello</p>'); //ajoute du html dans la div. ajoute l'html avant la toute fin de la div. Ajoute le paragraphe "hello"
//     div.insertAdjacentHTML("beforeend", '<button class="croix">X</button>'); //variable qui va contenir une div qui est un bouton
//     div.style.alignItems = "center"; //place au centre verticalement
//     if (toggle2 == false) {
//         var elem = document.getElementById(".Modal");
//         elem.remove();
//     }
//     else {
//         body.appendChild(div);
//     }
// })

// function delete_row(e)
// {
//     e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
// }



// const Poubelle = document.querySelectorAll(".Poubelle")
// for (let i = 0; i < Poubelle.length; i++) {
//     console.log(Poubelle[i]);
//     Poubelle[i].addEventListener("click", (event) => {
//         delete_row(Poubelle[i]);
//     })
// };

const Logo = document.querySelector(".imglogo"); //Permet d'accéder au logo et de faire des changements depuis main js
const suggestions = document.querySelector(".suggestions");
const bouton = document.querySelector(".BoutonDiv button"); //on a maintenant accès au bouton "post"
const body = document.querySelector("body");//pas de point car ce n'est pas moi qui ai crée la class
let toggle = false; //variable qui sera soit vraie soit fausse : booléan
let toggle2 = false; //si toggle2 est faux la fenêtre pour le tweet est fermé
const Poubelle = document.querySelectorAll(".Poubelle");
const Modal = document.querySelector(".Modal");
const buttonModal = document.querySelector(".close");

Logo.addEventListener("click", (event) => { //quand on va cliquer sur le logo on va lancer l'évènement click Tout ce qui entre crochet est ce qui va se passer en cliquant
    toggle = !toggle; //interrupteur est égal à son contraire
    if(toggle == false)
    {
        suggestions.style.right = "0%"; //si interrupteur est faux, le menu suggestion va se dérouler
    }
    else
    {
        suggestions.style.right = "-50%";
    }
})

bouton.addEventListener("click", (event) => {
    Modal.style.top = "5%";
})

buttonModal.addEventListener("click", (event) => {
    Modal.style.top = "-95%";
});

function delete_row(e)
{
    e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
}

for (let i = 0; i < Poubelle.length; i++) {
    console.log(Poubelle[i]);
    Poubelle[i].addEventListener("click", (event) => {
        delete_row(Poubelle[i]);
    })
};