<?php
if(isset($_POST['image_url'])){
    try{
        $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
        $image_url = htmlspecialchars($_POST['image_url']);
        $image_comment = htmlspecialchars($_POST['image_comment']);
        
             }catch(PDOException $e) {
     
             // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
             exit("❌🙀💀 OOPS :\n" . $e->getMessage());
     
             }

}