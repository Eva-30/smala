<?php

/* include('mod-pdo.php'); */

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
     
             /* var_dump($resultat); */
             // Comparaison du pass envoyé via le formulaire avec la base
             $isPasswordCorrect = password_verify($pass, $resultat['user_pass']);
             return $isPasswordCorrect;   
             
             //pseudo
            /*  $pseudo = $resultat['user_pseudo'];
              return $pseudo; */
           
     
             }catch(PDOException $e) {
     
             // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
             exit("❌🙀💀 OOPS :\n" . $e->getMessage());
     
             }

}