<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/javascript/contact.js"></script>
    <title>The District - Contact</title>
</head>
<body>
    <!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>
     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="parallax">
        <input type="search" name="" id="searchBar" placeholder="Recherchez votre plat">
    </div>

    <div class="div-body">
        <br>
        <h1 class="contact-titre">Contact</h1>
        <form action="" method="post">
            <div class="div-form">
                <div class="div-nom-prenom">
                    <div class="div-prenom">
                        <label class="label-prenom" for="prenom">Prenom : </label>
                        <input type="text" id="fname" name="prenom" placeholder="Dave">
                    </div>
                    <div class="div-nom">
                        <label class="label-nom" for="nom">Nom : </label>
                        <input type="text" id="lname" name="nom" placeholder="Loper">
                    </div>
                </div>
                <div class="div-email-num">
                    <div class="div-email">
                        <label class="label-email" for="email">Email : </label>
                        <input type="email" id="email" name="email" placeholder="Dave.loper@afpa.fr">
                    </div>
                    <div class="div-num">
                        <label class="label-num" for="num">Téléphone : </label>
                        <input type="tel" id="number" name="num" placeholder="07.XX.XX.XX.XX">
                    </div>
                </div>
            </div>
            <div class="div-message">
                <label for="message" class="label-message">Votre message : </label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Ecrivez nous !"></textarea>
            </div>
            <div class="div-btn">
                <button id="btnSubmit" type="submit">Envoyez</button>
            </div>
        </form>
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

