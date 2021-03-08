<?php
session_start();
include("pdo.php");
include("model/mod-user-image-create.php");

if (isset($_POST['image_url'])){ 
    try{
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    $requete = "INSERT INTO `images` 
                    (`image_url`,
                    `image_comment`,
                    `user_id`
                    )
                    VALUES (:image_url, :image_comment, :id)";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
        ":image_url"=> $image_url,
        ":image_comment"=> $image_comment,
        ":id"=>  $_SESSION['id']
        
    ));
    $count = $prepare->rowCount();
    if ($count==1){
        echo("Votre image a été postée!
        <form method='post' action='?user'>
        <button type='submit'>Retour</button>
        </form>");
    }else
    {echo("quelque chose n'a pas fonctionné");}
 } catch(PDOException $e) {
     
    // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
    exit("❌🙀💀 OOPS :\n" . $e->getMessage());

    }
} 

else{
    include("view/view-user-image-create.php");
}