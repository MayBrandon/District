<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/branding/favicon.ico" type="image/x-icon">
    <title>The District - Panier</title>
</head>
<body>
    <!-- HEADER  -->
<?php include('header-footer-php/header.php') ?>
      <!-- PARALAX AVEC BARRE DE RECHERCHE -->
    <div class="parallax">
        <input type="search" name="" id="searchBar" placeholder="Recherchez votre plat">
    </div>
    <!-- FIN PARALAX AVEC BARRE DE RECHERCHE -->

    <div class="div-body">
        <div class="div-titre-panier">
            <h1 class="titre-panier">Mon Panier</h1>
        </div>
        <div class="div-panier">
            <h2>Produits sélectionnés :</h2>
            <ul id="panier-liste"></ul>

            <h2>Prix total :</h2>
            <p id="prix-total"></p>
            <button class="btn-reset" onclick="resetPanier()">Réinitialiser</button>
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
    <script src="/assets/javascript/script.js"></script>
    <script>
        function resetPanier() {
      // Supprimer les données du sessionStorage
      sessionStorage.removeItem("panier");
      sessionStorage.removeItem("prixTotal");

      // Rediriger vers la page principale
      window.location.href = "/pages/pages-plats/plats-1.php";
    }
    document.addEventListener("DOMContentLoaded", function() {
      // Récupérer les données du sessionStorage
      var panier = JSON.parse(sessionStorage.getItem("panier")) || [];

      // Calculer le prix total
      var prixTotal = 0;
      panier.forEach(function(produit) {
        prixTotal += produit.prix;
      });
      
      // Enregistrer le prix total dans le sessionStorage
      sessionStorage.setItem("prixTotal", prixTotal);

      // Afficher les produits sélectionnés
      var panierListe = document.getElementById("panier-liste");
      panier.forEach(function(produit) {
        var li = document.createElement("li");
        li.style.listStyle = "none"

        var div = document.createElement("div");

        var h3 = document.createElement("h3");
        h3.textContent = produit.nom;
        div.appendChild(h3);

        var pDesc = document.createElement("p");
        pDesc.textContent = produit.description;
        div.appendChild(pDesc);

        var pPrix = document.createElement("p");
        pPrix.textContent = "Prix : " + produit.prix + "€";
        div.appendChild(pPrix);

        li.appendChild(div);
        panierListe.appendChild(li);
      });

      // Afficher le prix total
      var prixTotalElement = document.getElementById("prix-total");
      prixTotalElement.textContent = "Prix total : " + prixTotal.toFixed(2) + "€";
    });

    </script>
</body>
</html>