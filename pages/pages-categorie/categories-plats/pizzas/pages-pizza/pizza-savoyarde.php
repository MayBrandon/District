<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/plat.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Pizza Savoyarde</title>
</head>
<body>
      <!-- HEADER  -->
      <?php include('../../../../../header-footer-php/header.php') ?>

     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="div-banniere">
        <video  autoplay loop id="video" height="480px">
          <source src="/assets/video/video-pizza.mp4" type="">
        </video>
      </div>
     <!-- <div class="parallax">
        <input type="search" name="" id="searchBar" placeholder="Recherchez votre plat">
    </div> -->
    <!-- FIN PARALAX AVEC BARRE DE RECHERCHE -->

    <div class="div-body">
        <div class="div-body-block">
            <a class="lien-plat" href="/pages/pages-categorie/categories-plats/pizzas/pages-pizza/pizza-savoyarde.php">
                <div class="div-block">
                    <div class="div-plat-img">
                        <img class="test-size" src="/assets/img/img-categorie/categorie-pizza/pizza-savoyarde.png" alt="">
                    </div>
                    <div class="plat-description">
                        <h1 class="plat-titre">Pizza - Savoyarde</h1>

                        <p class="plat-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quasi nihil enim iste hic, eveniet libero maiores, vero similique adipisci, fugit harum sequi! Architecto cumque, consequuntur numquam dolor repellendus dignissimos mollitia. Dolor tenetur delectus cupiditate maiores debitis, corporis ex voluptatibus cum! Omnis natus nobis itaque aut quod quia sit soluta, doloremque ea corrupti voluptatum ipsum illo laudantium maiores nulla dolor mollitia quibusdam odit culpa molestias libero error veritatis voluptatem! In et maiores velit molestiae, animi similique! Maxime laboriosam dignissimos saepe 
                        </p>
                        <button class="btn-panier" onclick="ajoutPanier(12)">Ajouter au Panier</button>
                    </div>
                </div>
            </a>
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
    <script src="/assets/javascript/script.js"></script>
    <script>
        function ajoutPanier(idProduit) {
            let produit = {
                image: "",
                nom: "",
                description: "",
                prix: 0
            };

            if (idProduit === 9) {
                produit.image = "/assets/img/img-categorie/categorie-pizza/pexels-andre.png";
                produit.nom = "Pizza - Andre";
                produit.description = "Pizza - Andre";
                produit.prix = 10.00;
            } else if (idProduit === 10) {
                produit.image = "/assets/img/img-categorie/categorie-pizza/piza-rene.png";
                produit.nom = "Pizza - Rene";
                produit.description = "Pizza - Rene";
                produit.prix = 10.00;
            } else if (idProduit === 11) {
                produit.image = "/assets/img/img-categorie/categorie-pizza/pizza-kristina.png";
                produit.nom = "Pizza - Kristina";
                produit.description = "Pizza - Kristina";
                produit.prix = 10.00;
            } else if (idProduit === 12) {
                produit.image = "/assets/img/img-categorie/categorie-pizza/pizza-savoyarde.png";
                produit.nom = "Pizza - Savoyarde";
                produit.description = "Pizza - Savoyarde";
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