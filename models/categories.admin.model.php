<?php

    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {

        $query="
            
            SELECT c.cat_id, c.cat_descr, COUNT(*) as nb_article 
            
            FROM blog_categories c

            INNER JOIN blog_posts a ON a.post_category = c.cat_id

            GROUP BY c.cat_id";

        $req = $pdo->query($query);

        $data = $req->fetchAll();
    }
    catch  (Exception $e) {
        die('Connexion impossible : ' . $e->getMessage());
    }