<?php

    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {

        $query="
        
            SELECT post_content, post_title, display_name

            FROM blog_posts
            
            INNER JOIN blog_users
            ON post_author = ID

            INNER JOIN blog_categories
            ON post_category = cat_id
            
            WHERE post_ID = :article"
        ;

        $cursor = $pdo->prepare($query);

        $cursor->bindValue(':article', $_GET['article'], PDO::PARAM_STR);

        $cursor->execute();

        $cursor->setFetchMode(PDO::FETCH_ASSOC);

        $data = $cursor->fetch();
    } 
    catch  (Exception $e) {
        die('Connexion impossible : ' . $e->getMessage());
    }