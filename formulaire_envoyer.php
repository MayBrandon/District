<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/javascript/contact.js"></script>
    <title>The District - Formulaire envoyer</title>
</head>
<body>
    <!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>

     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="parallax">
        <input type="search" name="" id="searchBar" placeholder="Recherchez votre plat">
    </div>

    <h1 class="contact-titre">Contact</h1>
    <div class="div-body-contact">
        <br>
        <div class="confirmation">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $prenom = $_POST['prenom'];
                echo "Merci " . $_REQUEST['prenom'] . " d'avoir envoyer votre demande et à très bientot dans notre établissement !";
            }
        ?>
        </div>
        <div class="div-contact">
            <h1 class="fiche-contact" >Nos coordonnées : </h1>
            <ul class="contact">
                <li class="coor-titre">Numéro de tel : </li>
                    <p class="info-coor">07.XX.XX.XX.XX</p>
                <li class="coor-titre">Adresse mail : </li>
                    <p class="info-coor">the-district@restaurant.fr</p>
            </ul>
        </div>
    </div>
    <hr>
    <br>
    <h1 class="titre-maps">On se situe ici !</h1>
    <div class="div-maps">
        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.866289449807!2d2.2736665032812593!3d49.9282304996199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e786b33e3719cf%3A0x5fca6cfbcc69e662!2sAFPA%20-%20Centre%20de%20Amiens!5e0!3m2!1sfr!2sfr!4v1694762133861!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <hr class="separateur-footer">
    <?php include('header-footer-php/header.php') ?>

    <script src="/assets/javascript/script.js"></script>
</body>
</html>

