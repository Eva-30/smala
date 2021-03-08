<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une image</title>
</head>
<body>
   <?php 
echo("
<h1>Etes-vous sûr de vouloir supprimer cette image?</h1>
<div class='supp-image'>
<form method='POST'>
<label for='image_url'>Votre Image:</label>
<input type='text' id='image_url' name='image_url' value='".$prepare['image_url']."' required>
<label for='image_comment'>Commentaire:</label>
<input type='text' id='image_comment' name='image_comment' value='".$prepare['image_comment']."' required>
<input type='hidden' name='image_id' value='".$prepare['image_id']."'>
<input type='submit' name='supp_image' value='OUI supprimer'>
<a href='?user'>NON, retour à l'accueil</a>
</form>
</div>
");

   ?> 
</body>
</html>