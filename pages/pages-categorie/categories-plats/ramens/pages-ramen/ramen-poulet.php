<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/plat.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Ramen au Poulet</title>
</head>
<body>
      <!-- HEADER  -->
      <?php include('../../../../../header-footer-php/header.php') ?>

     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="div-banniere">
        <video  autoplay loop id="video" height="480px">
          <source src="/assets/video/video-asie.mp4" type="">
        </video>
      </div>
    <!-- FIN PARALAX AVEC BARRE DE RECHERCHE -->

    <div class="div-body">
        <div class="div-body-block">
            <div class="div-block">
                <div class="div-plat-img">
                    <img class="test-size" src="/assets/img/img-categorie/categorie-ramen/ramen-poulet.png" alt="">
                </div>
                <div class="plat-description">
                    <h1 class="plat-titre">Ramen au Poulet</h1>
    
                    <p class="plat-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quasi nihil enim iste hic, eveniet liberodi maiores, vero similique adipisci, fugit harum sequi! Architecto cumque, consequuntur numquam dolor repellendus dignissimos mollitia. Dolor tenetur delectus cupiditate maiores debitis, corporis ex voluptatibus cum! Omnis natus nobis itaque aut quod quia sit soluta, doloremque ea corrupti voluptatum ipsum illo laudantium maiores nulla dolor mollitia quibusdam odit culpa molestias libero error veritatis voluptatem! In et maiores velit molestiae, animi similique! Maxime laboriosam dignissimos saepe 
                    </p>
                    <button class="btn-panier" onclick="ajoutPanier(3)">Ajouter au Panier</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="separateur-footer">
    <?php include('../../../../../header-footer-php/footer.php') ?>

    <script src="/assets/javascript/script.js"></script>
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
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen-porc.png";
                produit.nom = "Ramen au porc";
                produit.description = "Ramen au porc narvalo";
                produit.prix = 10.00;
            } else if (idProduit === 3) {
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen-poulet.png";
                produit.nom = "Ramen au poulet";
                produit.description = "Ramen au poulet narvalo";
                produit.prix = 10.00;
            } else if (idProduit === 4) {
                produit.image = "/assets/img/img-categorie/categorie-ramen/ramen.png";
                produit.nom = "Ramen au boeuf";
                produit.description = "Ramen au boeuf narvalo";
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