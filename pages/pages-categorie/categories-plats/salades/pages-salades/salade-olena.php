<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/plat.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Salade Olena</title>
</head>
<body>
      <!-- HEADER  -->
      <?php include('../../../../../header-footer-php/header.php') ?>

     <!-- PARALAX AVEC BARRE DE RECHERCHE -->
     <div class="div-banniere">
        <video  autoplay loop id="video" height="480px">
          <source src="/assets/video/video-salades.mp4" type="">
        </video>
      </div>
     <!-- <div class="parallax">
        <input type="search" name="" id="searchBar" placeholder="Recherchez votre plat">
    </div> -->
    <!-- FIN PARALAX AVEC BARRE DE RECHERCHE -->

    <div class="div-body">
        <div class="div-body-block">
            <div class="div-block">
                <div class="div-plat-img">
                    <img class="test-size" src="/assets/img/img-categorie/categorie-salade/salades-olena.png" alt="">
                </div>
                <div class="plat-description">
                    <h1 class="plat-titre">Salade - Olena</h1>
                    <p class="plat-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quasi nihil enim iste hic, eveniet liberodi maiores, vero similique adipisci, fugit harum sequi! Architecto cumque, consequuntur numquam dolor repellendus dignissimos mollitia. Dolor tenetur delectus cupiditate maiores debitis, corporis ex voluptatibus cum! Omnis natus nobis itaque aut quod quia sit soluta, doloremque ea corrupti voluptatum ipsum illo laudantium maiores nulla dolor mollitia quibusdam odit culpa molestias libero error veritatis voluptatem! In et maiores velit molestiae, animi similique! Maxime laboriosam dignissimos saepe 
                    </p>
                    <button class="btn-panier" onclick="ajoutPanier(20)" id="ajoutPanier">Ajouter au Panier</button>
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

            if (idProduit === 17) {
                produit.image = "/assets/img/img-categorie/categorie-salade/salade-badness.png";
                produit.nom = "Salade - Badness";
                produit.description = "Salade - Badness";
                produit.prix = 10.00;
            } else if (idProduit === 18) {
                produit.image = "/assets/img/img-categorie/categorie-salade/salade-tranmautritam.png";
                produit.nom = "Salade - Tranmautritam";
                produit.description = "Salade - Tranmautritam";
                produit.prix = 10.00;
            } else if (idProduit === 19) {
                produit.image = "/assets/img/img-categorie/categorie-salade/salade-valeria.png";
                produit.nom = "Salade - Valeria";
                produit.description = "Salade - Valeria";
                produit.prix = 10.00;
            } else if (idProduit === 20) {
                produit.image = "/assets/img/img-categorie/categorie-salade/salades-olena.png";
                produit.nom = "Salade - Olena";
                produit.description = "Salade - Olena";
                produit.prix = 10.00;
            }

            let panier = JSON.parse(sessionStorage.getItem("panier")) || [];
            panier.push(produit);
            sessionStorage.setItem("panier", JSON.stringify(panier));

        }

      function afficherPanier() {
        window.location.href = "/../../../panier.php";
        console.log("je suis entré ici");
      }
    </script>
</body>
</html>