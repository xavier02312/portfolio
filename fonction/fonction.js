/**
 * Fonction
 * Formulaire
 * 
 * @param{string|int} value,id
 * @param{int}min
 * @return{boolean}
 * @param{boolean} error
 * 
 */
//Défini si mon champ et vide ou pas
const notEmpty = (value) => {

    if (typeof value !== "string" || value.length === 0)
    return false;

    else{
        return true;
    }
};
//Fonction d'erreur message

const isError = (message, success, id) => {

    //Récupère le champ input
    const input = document.querySelector(`#${id}`);

    //Récupère la balise contenant le message d'erreur
    const messageError = document.querySelector(`#${id}Error`);

    //Affiche le message d'erreur
    input.style.border = "2px solid red";
    messageError.innerText = message;
    messageError.style.display = "block";
    
    //affiche un succès
    if (success) {
        input.style.border = "2px solid green";
        messageError.style.display = "none";
    }
 };

 //Fonction de e-mail
const isEmail = (value) => {

    //code pattern vérif de caractère
    const pattern =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return pattern.test(value);
};

//Longueur de chaîne de caractère
const isLength = (value, min) => {
    return value.length >= min;
};
//validation de numéro de téléphone
const isPhone = (value) => {

    //Vérifie des chiffres uniquement
    const chiffre = /^0[1-6]\d{8}$/;
    return chiffre.test(value);
};


