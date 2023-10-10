<?php
session_start(); // Démarrage de la session

// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION['user'])) {
    header('Location: pre-index.php'); // Remplacez "login.php" par la page de connexion réelle
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Ajoutez le lien vers votre fichier CSS -->
    <title>Bienvenue sur notre site</title>
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site</h1>
        <p>Bonjour, <?php echo $_SESSION['user']; ?> !</p>
    </header>

    <nav>
        <ul>
            <li><a href="dashboard.php">Tableau de bord</a></li>
            <li><a href="profil.php">Mon profil</a></li>
            <li><a href="deconnexion.php">Déconnexion</a></li>
        </ul>
    </nav>

    <main>
        <!-- Contenu principal de votre page d'accueil -->
        <p>Vous êtes maintenant connecté à notre site. Profitez de toutes nos fonctionnalités !</p>
    </main>

    <footer>
        <!-- Pied de page de votre site -->
    </footer>
</body>
</html>
