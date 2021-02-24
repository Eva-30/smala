
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- bouton de déconnexion.-->

<form method = "POST" action = "?deconnexion">
    <button type="submit"><img src='x-mark.png' alt='bouton croix de déconnexion'></button>
 </form>

<!-- bouton d'accès à la page de "création de photo". -->

<form method = "POST" action = "?ajout-photo">
    <button type="submit">Photo</button>
 </form>


<?php

//$image=$prep->fetchAll();
//foreach($image as $key=>$value){
//echo $value['image_comment'];
//}

//image bannière
echo("<img src='logo.svg' alt='bannière smala verte et blanche'>");
while($image=$prep->fetch()){
    echo(
     "<img src=".$image['image_url']." "."alt='image gyroroue' height='300px'>
      <p>".$image['image_comment']."</p>
        <form method='POST' action = '?delete-photo'>
            <input type='hidden' name='i mage_id' value=".$image['image_id'].">         
            <button type='submit'><img src='delete.png' alt='bouton poubelle des images'/></button>
        </form>");
}

?>
 <!-- doit contenir le bouton de déconnexion. -->

 <!-- <form method = "POST" action = "?deconnexion">
    <button type="submit"><img src='/var/www/html/smala/assets/x-mark.png' alt='bouton croix de déconnexion'></button>
 </form> -->

 <!--doit contenir le bouton d'accès au menu utilisateur.-->

 <form method = "POST" action = "?admin-menu">
    <button type="submit">Menu</button>
 </form>

 <!--doit contenir le bouton d'accès à la page de "création de photo". -->

 <!-- <form method = "POST" action = "?ajout-photo">
    <button type="submit">Photo</button>
 </form> -->

</body>
</html>
