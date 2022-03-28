<?php

    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {

        $query="
            SELECT comment_ID, comment_post_ID, display_name, comment_content, post_title FROM blog_comments AS c 
                
            INNER JOIN blog_posts AS a ON a.post_ID = c.comment_post_ID
            
            INNER JOIN blog_users AS u ON comment_author = u.ID";
        

        $req = $pdo->query($query);

        $data = $req->fetchAll();
    }
    catch  (Exception $e) {
        die('Connexion impossible : ' . $e->getMessage());
    }