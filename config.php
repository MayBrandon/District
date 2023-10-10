<?php
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=district;charset=utf8", "root", "");
    }
    catch(PDOException $e) {
        die('La connexion à la base de données a échoué : '.$e->getMessage());
    }