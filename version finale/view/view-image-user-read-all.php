<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/read-all.css">
    <title>Espace Utilisateur</title>
</head>
<body>
   <header>
      <img class="logo" src='img/smala-logo.svg' alt='logo de la smala'></br>
      <form method='post' action='?user-image-create'>
         <button type='submit' name='image-create' value='ajout-photo'><img class='call-to-action' src='img/camera.png' alt='icone ajout de photo'></button>
      </form>
      <form method='post' action='?deconnexion'>
         <button type='submit' value='deconnexion'><img src='img/x-mark.png' alt='icone de deconnexion'></button>
      </form> 
   </header>
   <main>
      <h2>Bienvenue <?php echo $resultat['user_pseudo'] ?> !</h2>
<?php
//images de la smala
while($image=$prep->fetch()){
    echo(
     "<div class='bloc-photo'>
         <div class='photo'>
            <img src=img/".$image['image_url']." "."alt='image'>
         </div>");
         echo("<div class='comment'>");
         if ($_SESSION['id']==$image['user_id']){
            echo(
            "<form method='POST' action = '?user-image-delete'>
               <input type='hidden' name='image_id' value=".$image['image_id'].">
               <button type='submit'><img class='delete-from-user' src='img/delete.png' alt='bouton poubelle des images'/></button>
            </form>
            "); 
         }
         echo("<p>".$image['image_comment']."</p>");         
      echo("</div></div>")         ;       
}
?>
   </main>
   <footer>
        <form method='post' action='?user-menu'>
            <input type='hidden' name='user_id' value= <?php echo $_SESSION['id'] ?>>
            <input class='btn-menu' type='submit' value='mon compte'>
        </form>
    </footer>
</body>
</html>
