<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une photo </title>
</head>
<body>
<?php
include ('dbconf.php');

/*BESOIN D'AIDE SUR LES JOINTURES JE PENSE DONC VA FALLOIR COMPLETER */ 

if (isset($_GET['id']) and is_numeric($_GET['id'])){
    
    $id_film = htmlspecialchars($_GET['id']);
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

    //récupérer les infos de la photo 
    $requete = "SELECT * FROM `image` WHERE `image_id`=:image_id";
    $prepare = $connexion->prepare($requete);
    $prepare->execute(array(
        "image_id"=> $image_id
    ));
    $prepare = $prepare->fetch();

    echo("
        <h1>Etes-vous sûr de vouloir supprimer ce post ?</h1>
        <div class='image'>
        <form method='POST' action=''>
        <label for='image_url'>Votre Image:</label>
        <input type='text' id='image_url' name='image_url' value='".$prepare['image_url']."' required>
        <label for='image_comment'>Commentaire:</label>
        <input type='text' id='image_comment' name='image_comment' value='".$prepare['image_comment']."' required>
       
        <input type='hidden' name='image_id' value='".$prepare['image_id']."'>
        <input type='submit' value='Supprimer'>
        <a href=''>Retour à l'accueil</a>
        </form>
        </div>
    ");
}

if (isset($_POST['image_url'])){
    $connexion = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
    $id_film = htmlspecialchars($_POST['image_id']);

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
?>
</body>
</html>