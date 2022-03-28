<?php
    include('config/config.inc.php');

    include('models/pdo.inc.php');

    try {
        
        // $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // $query = "
        
        //     INSERT INTO  blog_users ( ID,  user_login,  user_pass,  user_email,  display_name,  user_photo,  user_admin,  user_token)
            
        //     VALUES (NULL, :user_login, :user_pass, :user_email, :display_name, 'user.png', 0, NULL)";

        // $cursor = $pdo->prepare($query);
        // $cursor->bindValue(':user_login', $_POST['login'], PDO::PARAM_STR);
        // $cursor->bindValue(':user_pass', $hash, PDO::PARAM_STR);
        // $cursor->bindValue(':user_email', $_POST['email'], PDO::PARAM_STR);
        // $cursor->bindValue(':display_name', $_POST['login'], PDO::PARAM_STR);

        // $cursor->execute();
    } 
    catch (Exception $err) {
        header('Location: index.php?error=1');
        exit;
    }