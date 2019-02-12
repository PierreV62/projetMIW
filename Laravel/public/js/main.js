/* Variable*/

let divTexteRegister =document.getElementById('registerTexte');
let divTexteLogin =document.getElementById('loginTexte');
let divLogin= document.getElementById('register');
let divRegister= document.getElementById('login');
let divOverlay =document.getElementById('connect');
let cardConnect =document.getElementById('cardConnect');
let fermerForm = document.getElementById('fermerForm');

/* Fin Variable */



/* Gestion ouverture PopUp inscription/connection */

function inscriptRegister(){

    divOverlay.style.display="block";
    
}


/* Gestion de la fermeture du PopUp de connection */

divOverlay.addEventListener('click',(e)=>{
    divOverlay.style.display="none";
});

fermerForm.addEventListener('click', (e)=>{
    divOverlay.style.display="none";
});

fermerForm.addEventListener('mouseover', (e)=>{
    fermerForm.style.cursor="pointer";
});

/* Empeche la fermeture quand on Click sur la div de connection */

cardConnect.addEventListener('click',(e)=>{
    e.stopPropagation();
});

/* Gestion de l'affichage du choix S'inscrire / Connection */ 



// S'inscrire

divTexteLogin.addEventListener('mouseover',(e)=>{

    divTexteLogin.style.cursor="pointer";

});

divTexteLogin.addEventListener('click',(e)=>{
    divTexteRegister.style.borderBottom="none";
    divTexteLogin.style.borderBottom="solid 2px white";
    divRegister.style.display="block";
    divLogin.style.display="none";

});


// Connection


divTexteRegister.addEventListener('mouseover',(e)=>{

    divTexteRegister.style.cursor="pointer";

});

divTexteRegister.addEventListener('click',(e)=>{
    divTexteLogin.style.borderBottom="none";
    divTexteRegister.style.borderBottom="solid 2px white";
    divLogin.style.display="block";
    divRegister.style.display="none";

});

