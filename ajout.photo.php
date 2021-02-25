<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une image</title>
</head>
<body>
   <?php
echo ("
<h1>Poster une nouvelle image </h1>
<div class='ajout-image'>
<form method='POST' action='?check-image-create.php'>
<label for='image_url'>Votre image:</label>
<input type='text' id='image_url' name='image_url' required>
<label for='image_comment'>Commentaire:</label>
<input type='text' id='image_comment' name='image_comment' required>
<input type='submit' value='Valider'>
<a href='?user'>Retour à l'accueil</a>
</form>
</div>
");

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
</body>
</html>