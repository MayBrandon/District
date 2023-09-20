<?php

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['email'];
$phone = $_POST['num'];
$message = $_POST['message'];

if (!preg_match("/^[a-zA-Z]+$/", $prenom)) {
    echo "Prenom non valide. Utiliser uniquement des lettres alphabétiques.";
}

if (!preg_match("/^[a-zA-Z]+$/", $nom)) {
    echo "Nom non valide. Utiliser uniquement des lettres alphabétiques.";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Adresse mail non valide.";
}

if (preg_match("/^[0-9]{10}$/", $phone)){
    echo "Numero de téléphone non valide";
    exit;
}




?>