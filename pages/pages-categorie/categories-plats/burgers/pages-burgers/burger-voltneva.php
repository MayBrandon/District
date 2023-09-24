<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/plat.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Accueil</title>
</head>
<body>
    <header>
    <!-- DEBUT MENU DEROULANT POUR TABLETTE ET MOBILE ET PC -->
    <nav id="nav-bar">
        <div class="div-logo">
            <img class="logo-district" src="/assets/img/branding/logo-district.png" alt="">
        </div>
        <ul class="nav-menu">
            <li class="li-menu">
                <a class="lien-menu"
                href="../../../index.php">Accueil</a>
            </li>
            <li class="li-menu">
                <a class="lien-menu"
                href="/pages/pages-categorie/categorie.php">Catégories</a>
            </li>
            <li class="li-menu">
                <a class="lien-menu"
                href="/pages/pages-plats/plats-1.php">Plats</a>
            </li>
            <li class="li-menu">
                <a class="lien-menu"
                href="/contact.php">Contact</a>
            </li>
            <li class="li-menu">
                <a class="lien-menu"
                href="../../panier.php"><img class="cart-svg" src="/assets/img/img-plat-accueil/shopping-cart-outline-svgrepo-com.svg" alt="">
            </a>
            </li>
        </ul>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <!--  FIN MENU DEROULANT POUR TABLETTE ET MOBILE -->
    </header>

    <div class="div-banniere">
        <video  autoplay loop id="video" height="480px">
          <source src="/assets/video/video-burger.mp4" type="">
        </video>
    </div>

    <div class="div-block">
        <div class="div-plat-img">
            <img src="/assets/img/img-categorie/categorie-burger/burger-voltneva.png" alt="">
        </div>
        <div class="plat-description">
            <h1 class="plat-titre">Burger - Voltneva</h1>

            <p class="plat-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quasi nihil enim iste hic, eveniet libero maiores, vero similique adipisci, fugit harum sequi! Architecto cumque, consequuntur numquam dolor repellendus dignissimos mollitia. Dolor tenetur delectus cupiditate maiores debitis, corporis ex voluptatibus cum! Omnis natus nobis itaque aut quod quia sit soluta, doloremque ea corrupti voluptatum ipsum illo laudantium maiores nulla dolor mollitia quibusdam odit culpa molestias libero error veritatis voluptatem! In et maiores velit molestiae, animi similique! Maxime laboriosam dignissimos saepe 
            </p>
            <button class="btn-panier" id="ajoutPanier">Ajouter au Panier</button>
        </div>
    </div>



    <hr class="separateur-footer">
    <footer>
        <div class="div-footer">
            <div class="categorie-block">
                <h4 class="footer-title">Nos catégories :</h4>
                <ul class="categorie-liste">
                    <li>
                        <a class="categorie-li" href="#">Asiatique</a>
                    </li>
                    <li>
                        <a class="categorie-li" href="#">Hamburger</a>
                    </li>
                    <li>
                        <a class="categorie-li" href="#">Pizza</a>
                    </li>
                    <li>
                        <a class="categorie-li" href="#">Pasta</a>
                    </li>
                    <li>
                        <a class="categorie-li" href="#">Salade</a>
                    </li>
                    <li>
                        <a class="categorie-li" href="#">Sandwich</a>
                    </li>
                </ul>
            </div>

            <div class="categorie-block">
                <h4 class="footer-title">Réservation :</h4>
                <ul class="categorie-liste">
                    <li ><a class="categorie-li" href="#">CATEGORIE</a></li>
                    <li><a class="categorie-li" href="#">CATEGORIE</a></li>
                </ul>
            </div>
        </div>
        <div class="social-block">
            <div class="facebook"><img class="social-logo" title="Facebook" src="/assets/img/social/facebook.png" alt=""></div>
            <div class="insta"><img class="social-logo" src="/assets/img/social/instagram.png" alt=""></div>
            <div class="linkedin"><img class="social-logo" src="/assets/img/social/linkedin.png" alt=""></div>
            <div class="pinterest"><img class="social-logo" src="/assets/img/social/pinterest.png" alt=""></div>
        </div>
    </footer>
    <!-- <script src="/assets/javascript/script.js"></script> -->
    <script>
        function ajoutPanier(idProduit) {
            let produit = {
                image: "",
                nom: "",
                description: "",
                prix: 0
            };

            if (idProduit === 1) {
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen-saumon.png";
                produit.nom = "Ramen au Thon";
                produit.description = "Ramen au thon narvalo";
                produit.prix = 10.00;
            } else if (idProduit === 2) {
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen-boeuf.png";
                produit.nom = "Ramen au boeuf";
                produit.description = "Ramen au boeuf narvalo";
                produit.prix = 10.00;
            } else if (idProduit === 3) {
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen-poulet.png";
                produit.nom = "Ramen au poulet";
                produit.description = "Ramen au poulet narvalo";
                produit.prix = 10.00;
            } else if (idProduit === 4) {
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen.png";
                produit.nom = "Ramen";
                produit.description = "Ramen";
                produit.prix = 10.00;
            }

            let panier = JSON.parse(sessionStorage.getItem("panier")) || [];
            panier.push(produit);
            sessionStorage.setItem("panier", JSON.stringify(panier));

        }

      function afficherPanier() {
        window.location.href = "../../../panier.php";
        console.log("je suis entré ici");
      }


    </script>
</body>
</html>