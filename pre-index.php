<?php
require '../../deconnexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/javascript/contact.js"></script>
    <title>The District - Connexion</title>
</head>
<body>
    <!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>

     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="parallax">
    </div>

    <div class="div-body">
        <br>
        <h1 class="contact-titre">Connexion</h1>
        <?php
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div>
                                <p class="message-erreur"><strong>Erreur </strong> mot de passe incorrect</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div>
                               <p class="message-erreur"><strong>Erreur </strong> email incorrect</p>
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div>
                                <p class="message-erreur">Compte non existant</p>
                            </div>
                        <?php
                        break;
                    }
                }
                ?>
        <form action="connexion.php" method="post">
            <div class="div-form-connexion">
                <div class="connexion">
                    <div class="div-prenom">
                        <label class="label-prenom" for="connexion">Email : </label>
                        <input type="email" name="email" placeholder="Email" required="required" autocomplete="off">
                    </div>
                    <div class="div-nom">
                        <label class="label-nom" for="password">Mot de passe : </label>
                        <input type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="div-btn">
                <button id="btnSubmit" type="submit">Connexion</button>
            </div>
            <div class="div-btn">
                <p>Vous n'êtes pas inscrit ? inscrivez vous !</p>
                <a class="btn-inscription" href="inscription.php">Inscription</a>
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

    <?php include('header-footer-php/footer.php') ?>

    <script src="/assets/javascript/script.js"></script>
</body>
</html>

