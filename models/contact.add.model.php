<?php
    // importation de config.inc.php & pdo.inc.php
    include('config/config.inc.php');

    include('models/pdo.inc.php');

    // try exécute le code à l'interieur du bloc ligne par ligne en vérifiant si il ne retourne aucune erreur
    // si une erreur est retounée, il l'envoie au catch et stop l'exécution du code
    try {

            // définit sous forme de string une instruction SQL pour insérer un nouveau "contact" dans blog_contacts
            // $query = "INSERT INTO blog_contacts (contact_name, contact_email, contact_phone, contact_message) 
            // VALUES ('" . addslashes($_POST["name"]) . "', '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '" . addslashes($_POST["message"]) ."')";
            
            // exécute l'instruction SQL contenue dans $query avec la librairie PDO
            // $req = $pdo->exec($query);


        $query = "INSERT INTO blog_contacts (contact_name, contact_email, contact_phone, contact_message) 
        VALUES (:contact_name, :contact_email, :contact_phone, :contact_message)";

        // prépare la requête sans rentrer les variables pour le moment
        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':contact_name', $_POST['name'], PDO::PARAM_STR);
        $cursor->bindValue(':contact_email', $_POST['email'], PDO::PARAM_STR);
        $cursor->bindValue(':contact_phone', $_POST['phone'], PDO::PARAM_STR);
        $cursor->bindValue(':contact_message', $_POST['message'], PDO::PARAM_STR);

        $cursor->execute();
    } 
    // récupère l'erreur du try dans la variable $e (qu'il créée en même temps)
    catch (Exception $err) {
        // change le header pour rediriger vers index.php avec l'option error=1 pour afficher un message d'erreur
        header('Location: index.php?error=1');
        // arrête l'exécution du code
        exit;
    }