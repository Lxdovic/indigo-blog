<?php

    // try exécute le code à l'interieur du bloc ligne par ligne en vérifiant si il ne retourne aucune erreur
    // si une erreur est retounée, il l'envoie au catch et stop l'exécution du code
    try{
        // définit l'adresse et le type de la BDD 
        // type : mysql
        // host : url de la BDD (localhost)
        // dbname : nom de la BDD (afpa_blog1)
        $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        // variable de type array

        // array[0] : créée une commande avec la librarie PDO (commande d'initialisation)
        //       -> SET NAMES : définit le mode d'interprétation de la BDD
        //       -> DB_CHARSET : le type d'encodage (utf8)

        // array[1] : créée une commande avec la librarie PDO (commande de mode d'erreur)
        //       -> pdo::ERRMODE_EXCEPTION : définit le mode d'erreur en "EXCEPTION"
        $options = array(
            pdo::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
            pdo::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION 
        );

        // variable de type CLASS

        // class[0] ($dns) : demande l'adresse de la BDD
        // class[1] : demande le login de la BDD
        // class[µ2] : demande le password de le BDD,
        // class[3] ($options) : demande les options de la BDD 
        $pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);

    }   
    // récupère l'erreur du try dans la variable $e (qu'il créée en même temps)
    catch (Exception $e) {
        // affiche le message de l'erreur
        die('Connexion impossible : ' . $e->getMEssage());
    }