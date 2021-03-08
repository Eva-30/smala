<?php
session_start();
if (isset($_SESSION['id'])) {
    include("pdo.php");
    include("model/mod-admin-image-delete.php");
    
    if (isset($_POST['supp_image'])){ 
        try{
        
        
            $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
        
            $requete = "DELETE FROM `images` WHERE `image_id`=:image_id";
            $prepare = $connexion->prepare($requete);
            $prepare->execute(array(
                ":image_id"=> $image_id
            ));
            $count = $prepare->rowCount();
        if ($count==1){
            include('view/view-transition.php');
            echo("<p>Votre image a été supprimée!</p>
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
        include("view/view-admin-image-delete.php");
    } 
}
