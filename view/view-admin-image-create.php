<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une image</title>
</head>
<body>   
<h1>Poster une nouvelle image </h1>
<div class='ajout-image'>
<form method='POST' action='?admin-image-create' enctype='multipart/form-data'>
<label for='image_url'>Votre image:</label>
<input type='text' id='image_url' name='image_url' required>
<label for='image_comment'>Commentaire:</label>
<input type='text' id='image_comment' name='image_comment' required>
<input type="hidden" id='user_id' name='user_id' value='<? $_SESSION['id']; ?>'>
<input type='submit' value='Valider'>
<a href='?admin'>Retour à l'accueil</a>
</form>
</div>    
</body>
</html>