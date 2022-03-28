<?php

    // importation de config.inc.php & pdo.inc.php
    include('config/config.inc.php');

    include('models/pdo.inc.php');

    // try exécute le code à l'interieur du bloc ligne par ligne en vérifiant si il ne retourne aucune erreur
    // si une erreur est retounée, il l'envoie au catch et stop l'exécution du code
    try {
        // définit une requete SQL (sous forme de string pour le moment) (insersion de variables telles que TRONCATURE)
        // en concaténation
        $query="
            
            SELECT post_ID, cat_descr , LEFT(post_content ," . TRONCATURE . ") AS post_content ,post_title , post_img_url, display_name , post_date

            FROM blog_posts
            
            INNER JOIN blog_users
            ON post_author = ID

            INNER JOIN blog_categories
            ON post_category = cat_id

            ORDER BY post_date DESC
        ";

        // envoie la requête avec le string créé précédemment via la librarie PDO
        $req = $pdo->query($query);

        // récupère les lignes restantes du résultat
        $data = $req->fetchAll();
        

    }
    // récupère l'erreur du try dans la variable $e (qu'il créée en même temps)
    catch  (Exception $e) {
        // affiche le message de l'erreur
        die('Connexion impossible : ' . $e->getMessage());
    }