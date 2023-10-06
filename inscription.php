<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/javascript/contact.js"></script>
    <title>The District - Inscription</title>
</head>
<body>
    <!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>

     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="parallax">
    </div>


     <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 
                        break;
                    }
                }
                ?>

            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-inscription">Inscription</button>
                </div>  
            </form>
        </div><hr>
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

