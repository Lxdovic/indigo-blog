<?php

    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {

        $query="
            
            SELECT post_ID, cat_descr , LEFT(post_content ," . TRONCATURE . ") AS post_content ,post_title , post_img_url, display_name , post_date

            FROM blog_posts
            
            INNER JOIN blog_users
            ON post_author = ID

            INNER JOIN blog_categories
            ON post_category = cat_id

            ORDER BY post_date DESC
        ";

        $req = $pdo->query($query);

        $data = $req->fetchAll();
    }
    catch  (Exception $e) {
        die('Connexion impossible : ' . $e->getMessage());
    }