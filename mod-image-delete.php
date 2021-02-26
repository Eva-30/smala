<?php
include ('dbconf.php');

/*BESOIN D'AIDE SUR LES JOINTURES JE PENSE DONC VA FALLOIR COMPLETER */ 

if (isset($_GET['id']) and is_numeric($_GET['id'])){
    
    $image_id = htmlspecialchars($_GET['id']);
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    //récupérer les infos de la photo 
    $requete = "SELECT * FROM `image` WHERE `image_id`=:image_id";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
        "image_id"=> $image_id
    ));
    $prepare = $prepare->fetch();

}
if (isset($_POST['image_url'])){
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
    $image_id = htmlspecialchars($_POST['image_id']);

    $requete = "DELETE FROM `image` WHERE `image_id`=:image_id";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
        "image_id"=> $image_id
    ));

    echo ("
    <p>Post Supprimé</p>
    <a class='lien-retour' href=''>Retour à l'accueil</a>
    ");
}
