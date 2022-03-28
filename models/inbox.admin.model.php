<?php
    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {

        $query = "
        SELECT * FROM blog_contacts";
        
        $req = $pdo->query($query);

        $data = $req->fetchAll();
    } 
    catch (Exception $err) {
        header('Location: index.php?error=1');
        exit;
    }