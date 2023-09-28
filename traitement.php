<?php
// // Vérifiez si le formulaire a été soumis
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupérez les données du formulaire
//     $prenom = $_POST["prenom"];
//     $nom = $_POST["nom"];
//     $email = $_POST["email"];
//     $num = $_POST["num"];
//     $message = $_POST["message"];
//     $separate = "--------------------------------";
//     $nbr = 0;
//     // Concaténez les données en une seule chaîne
//     $data = $separate."\n" .
//             "Prénom : " . $prenom . "\n" .
//             "Nom : " . $nom . "\n" .
//             "Email : " . $email . "\n" .
//             "Téléphone : " . $num . "\n" .
//             "Message : " . $message . "\n";

//             // Ouvrez le fichier en écriture (ou création s'il n'existe pas)
//     $fp = fopen("formulaire-contact.txt", "a");

//     // Écrivez les données dans le fichier
//     fputs($fp, $data);

//     // Fermez le fichier
//     fclose($fp);

//     // Redirigez l'utilisateur vers une page de confirmation ou une autre page de votre choix
//     header("Location: formulaire_envoyer.php");
//     exit();
// }


if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['num']) && isset($_POST['message'])) {
    include 'the_district.php';

} else {
    header("location: formulaire_envoyer.php");
}
// ?>