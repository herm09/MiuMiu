const Logo = document.querySelector(".imglogo"); //Permet d'accéder au logo et de faire des changements depuis main js
const suggestions = document.querySelector(".suggestions");
const bouton = document.querySelector(".BoutonDiv button"); //on a maintenant accès au bouton "post"
const body = document.querySelector("body");//pas de point car ce n'est pas moi qui ai crée la class
let toggle = false; //variable qui sera soit vraie soit fausse : booléan
let toggle2 = false; //si toggle2 est faux la fenêtre pour le tweet est fermé
const Modal = document.querySelector(".Modale");
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


let allArticles = document.querySelectorAll('.tweet1')

let btnall = document.getElementById('all')

btnall.addEventListener('click', ()=> {
    window.location = "home.php"
})

let btnfootball = document.getElementById('footballbtn') 
let footballtag = document.querySelectorAll('.Football')

btnfootball.addEventListener('click', ()=>{
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    footballtag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btnsante = document.getElementById('santebtn')
let santetag = document.querySelectorAll('.Santé')

btnsante.addEventListener('click', ()=> {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    santetag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btngame = document.getElementById('gamebtn')
let gametag = document.querySelectorAll('.Jeux-vidéos')

btngame.addEventListener('click', ()=> {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    gametag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add("tweet1")
    });
})

let btnactualites = document.getElementById('actualitesbtn')
let actualitestag = document.querySelectorAll('.Actualités')

btnactualites.addEventListener('click', ()=> {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    actualitestag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btntechno = document.getElementById('technobtn')
let technotag = document.querySelectorAll('.Nouvelles-technologies')

btntechno.addEventListener('click', ()=> {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    technotag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btnpolitique = document.getElementById('politiquebtn')
let politiquetag = document.querySelectorAll('.Politique')

btnpolitique.addEventListener('click', ()=> {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    politiquetag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btnmusique = document.getElementById('musiquebtn')
let musiquetag = document.querySelectorAll('.Musique')

btnmusique.addEventListener('click', () => {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    musiquetag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btnanimaux = document.getElementById('animauxbtn')
let animauxtag = document.querySelectorAll('.Animaux')

btnanimaux.addEventListener('click', () => {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    animauxtag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btnnature = document.getElementById('naturebtn')
let naturetag = document.querySelectorAll('.Nature')

btnnature.addEventListener('click', () => {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    naturetag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})

let btntemps = document.getElementById('tempsbtn')
let tempstag = document.querySelectorAll('.Temps')

btntemps.addEventListener('click', () => {
    allArticles.forEach(article => {
        article.classList.remove('tweet1')
        article.classList.add('none')
    });
    tempstag.forEach(tag => {
        tag.classList.remove('none')
        tag.classList.add('tweet1')
    });
})