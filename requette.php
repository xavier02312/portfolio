<?php

//connecter page d' accueil
require_once 'index.php';

//Base de Données
require_once 'connexion.php';
//Message d'erreur
$error = null;

//Netoyage des données 'post'
if (!empty($_POST)) {
    $lastname = htmlspecialchars(strip_tags($_POST['lastname']));
    $firstname = htmlspecialchars(strip_tags($_POST['firstname']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $commentaire = htmlspecialchars(strip_tags($_POST['commentaire']));


    //Vérifie si les champs sont pas vide
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['commentaire'])) {


        //Requête SQL
        $query = $db->prepare('INSERT INTO contact (lastname, firstname, email, phone, commentaire) VALUES ( :lastname, :firstname, :email, :phone, :commentaire)');

        $query->bindValue(':lastname', $lastname);
        $query->bindValue(':firstname', $firstname);
        $query->bindValue(':email', $email);
        $query->bindValue(':phone', $phone);
        $query->bindValue(':commentaire', $commentaire);

        $query->execute();
        


        header('Location: 404.php');
    } else {
        $error = 'Tous les champs sont obligatoires';
    }
}
?>


