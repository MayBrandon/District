<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Accueil</title>
</head>
<body>

<!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>

    <!-- PARALAX AVEC BARRE DE RECHERCHE -->
    <div class="parallax">
        <input type="search" name="" id="searchBar" placeholder="Recherchez votre plat">
    </div>
    <!-- FIN PARALAX AVEC BARRE DE RECHERCHE -->

    <!-- IMG RESPONSIVE -->
    <img class="img-responsive" src="/assets/img/branding/bg-parallax.jpeg" alt="">
    <!--  -->

    <div class="div-body">
        <div class="div-presentation">
            <h1 class="titre-presentation">Présentation</h1>
            <br>
                <p class="text-presentation">
                    <strong>Bienvenue à The District : Une Expérience Culinaire Exceptionnelle depuis 2016.</strong>
                    <br>
                    Depuis notre ouverture en 2016, The District s'est imposé comme l'adresse de prédilection pour les amateurs de gastronomie à la recherche d'une expérience culinaire inoubliable. Niché au cœur d'<span class="span-txt">Amiens</span>, notre établissement se distingue par son service à table de première classe et son équipe de grands chefs cuisiniers passionnés.
                </p>
        </div>
        <div id="slider">
            <div class="div-titre">
                <h1 class="titre-categorie"><a class="titre-categorie" href="/pages/pages-categorie/categorie.php">Nos catégories</a></h1>
            </div>
             <img class="img-plat" src="/assets/img/img-plat-accueil/oeufs.png" id="slide" alt="">

            <div id="precedent" onclick="changeSlide(-1)">&lt;</div>
            <div id="suivant" onclick="changeSlide(1)">&gt;</div>
        </div>
        <div class="div-text">
            <p class="text">
                <span class="span-txt">Chez The District</span>, nous croyons en l'importance de la fraîcheur et de la qualité des ingrédients. C'est pourquoi nous nous engageons à ne servir que des produits frais, soigneusement sélectionnés pour garantir une explosion de saveurs dans chaque plat que nous préparons. Nous croyons que la passion pour la cuisine transparaît dans chaque bouchée, et notre équipe de chefs dévoués met tout en œuvre pour offrir une expérience gustative exceptionnelle à nos clients.
            </p>
        </div>
        <div class="div-plat" >
            <h1 class="titre-plat">Nos plats</h1>
            <div class="div-plat-img" id="div-plat-img">
                <div class="div-img">
                    <a href="/pages/pages-categorie/categories-plats/salades/pages-salades/salade-valeria.php">
                        <img class="img-plat" src="/assets/img/img-categorie/categorie-salade/salade-valeria.png" alt="Salade Valeria">
                    </a>
                </div>
                <div class="div-img">
                    <a href="/pages/pages-categorie/categories-plats/ramens/pages-ramen/ramen-poulet.php">
                        <img class="img-plat" src="/assets/img/img-categorie/categorie-ramen/ramen-poulet.png" alt="Ramen au poulet">
                    </a>
                </div>
                <div class="div-img">
                    <a href="/pages/pages-categorie/categories-plats/burgers/pages-burgers/burger-valeria.php">
                        <img class="img-plat" src="/assets/img/img-categorie/categorie-burger/burger-valeria.png" alt="Burger de Valeria">
                    </a>
                </div>
                <div class="div-img">
                    <a href="/pages/pages-categorie/categories-plats/pates/pages-pates/pates-truffes.php">
                        <img class="img-plat" src="/assets/img/img-categorie/categorie-pates/pates-truffes.png" alt="Pates au Truffes">
                    </a>
                </div>
                <div class="div-img">
                    <a href="/pages/pages-categorie/categories-plats/pizzas/pages-pizza/pizza-savoyarde.php">
                        <img class="img-plat" src="/assets/img/img-categorie/categorie-pizza/pizza-savoyarde.png" alt="Pizza savoyarde">
                    </a>
                </div>
                <div class="div-img">
                    <a href="/pages/pages-categorie/categories-plats/sandwich/pages-sandwich/sandwich-daniel.php">
                        <img class="img-plat" src="/assets/img/img-categorie/categorie-sandwich/sandwich-daniel.png" alt="Dandwich Daniels">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="titre-maps">On se situe ici !</h1>
    <div class="div-maps">
        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.866289449807!2d2.2736665032812593!3d49.9282304996199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e786b33e3719cf%3A0x5fca6cfbcc69e662!2sAFPA%20-%20Centre%20de%20Amiens!5e0!3m2!1sfr!2sfr!4v1694762133861!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <hr class="separateur-footer">
    
    <?php include('header-footer-php/footer.php') ?>

    <script src="/assets/javascript/script.js"></script>
</body>
</html>