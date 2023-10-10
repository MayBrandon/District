<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de connexion.
    header('Location: connexion.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>Commande</title>
</head>
<body>
<!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>

<?php include('header-footer-php/footer.php') ?>
</body>
</html>