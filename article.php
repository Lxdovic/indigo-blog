<?php

    if(!isset($_GET["article"])) {
        die("Manque paramètre");
    };

    include('models/article.model.php');

    include('views/article.view.php'); 
