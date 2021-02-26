<?php

if(isset($_POST['email'])){

      try{
     
            $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
     
            $mail = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['password']);
     
             //  Récupération de l'utilisateur et de son pass hashé
             $req = $pdo->prepare('SELECT * FROM users WHERE user_mail = :mail');
             $req->execute(array(
             ':mail' => $mail));
             $resultat = $req->fetch();
     
               
           
      }catch(PDOException $e) {
     
             // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
             exit("❌🙀💀 OOPS :\n" . $e->getMessage());
      }
}