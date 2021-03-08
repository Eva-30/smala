<?php
    try{
        $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
        $image_id = htmlspecialchars($_POST['image_id']);
        

    $requete = "SELECT * FROM `images` WHERE `image_id`=:image_id";
    $prepare = $pdo->prepare($requete);
    $prepare->execute(array(
        "image_id"=> $image_id
    ));
    $prepare = $prepare->fetch();

             }catch(PDOException $e) {
     
             // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
             exit("❌🙀💀 OOPS :\n" . $e->getMessage());
     
             }