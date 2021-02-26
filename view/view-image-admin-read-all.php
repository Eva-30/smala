<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Admin</title>
</head>
<body>
<h1>espace administrateur</h1>
<h2>Bienvenue <?php echo $resultat['user_pseudo'] ?> !</h2>

<!--image bannière-->
<img src='img/smala-logo.svg' alt='logo de la smala' height='100px'></br>

<form method='post' action='?ajout-photo'>
    <button type='submit' name='ajout-photo' value='ajout-photo'><img src='img/camera.png' alt='icone ajout de photo'></button>
</form>
<form method='post' action='?deconnexion'>
    <button type='submit' value='deconnexion'><img src='img/x-mark.png' alt='icone de deconnexion'></button>
</form>

<?php
//images de la smala
while ($image = $prep->fetch()){
    echo 
    ("<img src=img/".$image['image_url']." alt='image de la smala' height='200px'>
    <p>".$image['image_comment']."</p>
    <form method='post' action='?image-delete'>
    <input type='hidden' name='image_id' value=".$image['image_id'].">
    <button type='submit' name='delete-photo'><img src='img/delete.png' alt='icone de suppression' height='30px'></button>
    </form>
    <form method='post' action='?image-update'>
    <input type='hidden' name='image_id' value=".$image['image_id'].">
    <button type='submit' name='update-photo'><img src='img/pen.png' alt='icone de modification' height='30px'></button>
    </form>");
}
?>

<form method='post' action='?admin-menu'>
    <input type='hidden' name='user_id' value= <?php echo $_SESSION['id'] ?>>
    <input type='submit' value='menu'>
</form>
</body>
</html>
