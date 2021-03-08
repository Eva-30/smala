<?php
session_start();
if (isset($_SESSION['id'])) {
    include("pdo.php");
    include("model/mod-admin-image-update.php");
    
    if (isset($_POST['mod_image'])){
        $image_url = htmlspecialchars($_POST['image_url']);
        $image_comment = htmlspecialchars($_POST['image_comment']);
        try{
            $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
        
            $requete = "UPDATE `images` 
                            SET `image_url`=:image_url,
                                `image_comment`=:image_comment
                            WHERE `image_id`=:image_id";
            $prepare = $connexion->prepare($requete);
            $prepare->execute(array(
                ":image_url"=> $image_url,
                ":image_comment"=> $image_comment,
                ":image_id"=> $image_id
            ));
            $count = $prepare->rowCount();
        if ($count==1){
            include('view/view-transition.php');
            echo("<p>Votre image a été modifiée!</p>
            <form method='post' action='?admin'>
            <button type='submit'>Retour</button>
            </form>");
            echo("</body></html>");   
        }else
        {echo("quelque chose n'a pas fonctionné");}
     } catch(PDOException $e) {
         
        // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
        exit("❌🙀💀 OOPS :\n" . $e->getMessage());
    
        }
    } 
    
    else{
        include("view/view-admin-image-update.php");
    } 
}
