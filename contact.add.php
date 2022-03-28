<?php

    if (!isset($_POST["name"])) {
        die("Nom obligatoire!");
    }

    if ($_POST["name"] == "") {
        die("Nom doit contenir une valeur!");
    }

    if (strlen($_POST["name"]) > 25 ) {
        die("Nom doit être inférieur à 26 caractères !");
    }

    include('models/contact.add.model.php');

    header('Location:contact.php?notif=1');

    exit;
