<?php

    if (!isset($_POST["login"])) { die("Login obligatoire!"); }

    if ($_POST["login"] == "") { die("Login doit contenir une valeur!"); }

    if (strlen($_POST["login"]) > 25 ) { die("Login doit être inférieur à 26 caractères !"); }
    
    if ($_POST["password"] != $_POST["passwordconfirm"]) { die("Les mots de passe doivent être identiques !"); }

    include('models/register.add.model.php');

    header('Location:login.php?notif=1');

    exit;
