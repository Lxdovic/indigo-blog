<?php

    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {

        $query="
            
            SELECT * FROM blog_users
        ";

        $req = $pdo->query($query);

        $data = $req->fetchAll();
    }
    catch  (Exception $e) {
        die('Connexion impossible : ' . $e->getMessage());
    }