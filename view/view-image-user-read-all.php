<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Utilisateur</title>
</head>
<body>
<h2>Bienvenue <?php echo $resultat['user_pseudo'] ?> !</h2>
<!-- bouton de déconnexion.-->
<form method = "POST" action = "?deconnexion">
   <button type="submit"><img src='img/x-mark.png' alt='bouton croix de déconnexion'></button>
</form>

<!-- bouton d'accès à la page de "création de photo". -->
<form method = "POST" action = "?image-create">
   <button type="submit"><img src='img/camera.png' alt='icone ajout image'></button>
</form>

<?php

//image bannière
echo("<img src='img/smala-logo.svg' alt='bannière smala verte et blanche'></br>");

//images de la smala
while($image=$prep->fetch()){
    echo(
     "<img src=img/".$image['image_url']." "."alt='image' height='200px'>
      <p>".$image['image_comment']."</p>");     
      if ($_SESSION['id']==$image['user_id']){
         echo(
         "<form method='POST' action = '?delete-photo'>
         <input type='hidden' name='image_id' value=".$image['image_id'].">
         <button type='submit'><img src='img/delete.png' alt='bouton poubelle des images'/></button>
         </form>"); 
      }                  
}
?>

 <!--bouton d'accès au menu utilisateur.-->
 <form method = "POST" action = "?user-menu">
   <input type='hidden' name='user_id' value= <?php echo $_SESSION['id'] ?>>
   <button type="submit">Menu</button>
 </form>

</body>
</html>
