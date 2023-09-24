<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/plat.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Burger Valeria</title>
</head>
<body>
      <!-- HEADER  -->
      <?php include('../../../../../header-footer-php/header.php') ?>

    <div class="div-banniere">
        <video  autoplay loop id="video" height="480px">
          <source src="/assets/video/video-burger.mp4" type="">
        </video>
    </div>

    <div class="div-block">
        <div class="div-plat-img">
            <img class="test-size" src="/assets/img/img-categorie/categorie-burger/burger-valeria.png" alt="">
        </div>
        <div class="plat-description">
            <h1 class="plat-titre">Burger - Valeria</h1>
            <p class="plat-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quasi nihil enim iste hic, eveniet libero maiores, vero similique adipisci, fugit harum sequi! Architecto cumque, consequuntur numquam dolor repellendus dignissimos mollitia. Dolor tenetur delectus cupiditate maiores debitis, corporis ex voluptatibus cum! Omnis natus nobis itaque aut quod quia sit soluta, doloremque ea corrupti voluptatum ipsum illo laudantium maiores nulla dolor mollitia quibusdam odit culpa molestias libero error veritatis voluptatem! In et maiores velit molestiae, animi similique! Maxime laboriosam dignissimos saepe 
            </p>
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

            if (idProduit === 5) {
                produit.image = "/assets/img/img-categorie/categorie-burger/burger-horizon.png";
                produit.nom = "Burger - Horizon";
                produit.description = "Burger - Horizon";
                produit.prix = 10.00;
            } else if (idProduit === 6) {
                produit.image = "/assets/img/img-categorie/categorie-burger/burger-valeria.png";
                produit.nom = "Burger - Valeria";
                produit.description = "Burger - Valeria";
                produit.prix = 10.00;
            } else if (idProduit === 7) {
                produit.image = "/assets/img/img-categorie/categorie-burger/burger-vilnis.png";
                produit.nom = "Burger - Vilnis";
                produit.description = "Burger - Vilnis";
                produit.prix = 10.00;
            } else if (idProduit === 8) {
                produit.image = "/assets/img/img-categorie/categorie-burger/burger-voltneva.png";
                produit.nom = "Burger - Voltneva";
                produit.description = "Burger - Voltneva";
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