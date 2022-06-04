/**
 * Chargement du DOM
 */
window.onload = function() {
    alert("Document ready!");
}
/**
 * @param{boolean} response
 */

/**
 * 
 * 
 * Menu Burger
 * 
 * 
 */
const open = document.getElementById("open");         // 1élément//
const burger = document.getElementById("burger");     // 2élément//
const ul = document.querySelector("ul");              // 3élément//

open.addEventListener("click", function(event) {
    event.preventDefault()
    ul.classList.toggle("open")
});

/**
 * Formulaire
 * champs Nom
 */
//Le nom
//Séléctionne le champ "input" text
 const lastName = document.querySelector("#lastname");

 //Applique un écouteur d'évènement
lastName.addEventListener('input', () => {

    //Vérifie si le champs est vide 
    const response = notEmpty(lastName.value);

    //Fonction d'erreur
    isError("Votre nom est obligatoire", response, "lastname");

});
//Le prenom
const firstname = document.querySelector("#firstname");

//Ecouteur d'évènement
firstname.addEventListener("input", () => {

    //Vérifie le champs
    const response = notEmpty(firstname.value);

    //Fonction d'erreur
    isError("Votre prénom est obligatoire" , response, "firstname");
    
});
//Le Mail
const mail = document.querySelector("#email");

//Ecouteur d'évènement
mail.addEventListener("input", () => {

    //Vérifie le champs
    const response = notEmpty(mail.value);

    //Fonction d'erreur
    isError("Votre Adresse e-mail est obligatoire", response, "email");

    //fonction mail
    if (response) {
        
        const checkEmail = isEmail(mail.value);
        isError("L'adresse e-mail est invalide", checkEmail, "email");
    }


});
//Le téléphone //Affiche le message trop longtemps//
const phone = document.querySelector("#phone");

//Ecouteur d'événement
phone.addEventListener("input", () => {

    //Vérifie le champs
    const response = notEmpty(phone.value);

    //Fonction d'erreur
    isError("Votre numéro de téléphone est invalide", response, "phone");

    //Fonction numéro
    if (response) {
      
        const numPhone = isPhone(phone.value);
        isError("Uniquement des chiffres !", numPhone, "phone");      
    } 
});
//Le message textarea //limiter à 250 caractère à refaire
const commentaire = document.querySelector("#commentaire");

//Ecouteur d'événement
commentaire.addEventListener("input", () => {

    //Vérifie le champs
    const response = notEmpty(commentaire.value);

    //Fonction d'erreur
    isError("Ne pas dépasser 250 carartère", response, "commentaire");

});
//Bouton accepter les conditions
const invalidCheck = document.querySelector("#invalidCheck");

//Ecouteur d'événement
invalidCheck.addEventListener("input", () => {
    
//Vérifie le champs
const response = document.querySelector("#invalidCheck");

const error = document.querySelector("#invalidCheck");

    if (response) {
        invalidCheck.style.border = "2px solid green";      /**bouton check reste vert */
        error.style.display = "block";
        
    }
    else {
        error.inerText = "Veuillez accepter les conditions";
        error.display = "block";
        invalidCheck.style.border = "2px solid red";      
    } 
});
//formulaire d'envoi







   