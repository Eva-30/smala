<?php
include ('dbconf.php'); /*Fichier de configuration de la DB*/

if (isset($_POST['image'])){
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    $image_url = htmlspecialchars($_POST['image']);
    $image_comment = htmlspecialchars($_POST['comment']);

    $requete = "INSERT INTO `image` 
                    (`image_url`,
                    `image_comment`
                    )
                    VALUES (:image_url, :image_comment)";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
        "image_url"=> $image_url,
        "image_comment"=> $imahe_comment
        
    ));

    echo ("
    <p>Image ajoutée!</p>
    <a class='lien-retour' href=''>Retour à l'accueil</a>
    ");


   }
   ?> 
?>