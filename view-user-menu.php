<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-menu</title>
</head>
<body>

<h1>Menu Utilisateur</h1>
<img src='img/smala-logo.svg' alt='bannière smala verte et blanche' height='100px'></br>

    <!-- UPDATE PSEUDO/EMAIL/MDP-->

    <form method="post">
      <input type="text" name="user_pseudo" value="<?php  echo htmlspecialchars($resultat); ?>">
      <input type="submit" name="update_pseudo" value="Modifier">
      <input type="mail" name="user_mail" value="<?php  echo htmlspecialchars($resultat); ?>">
      <input type="submit" name="update_mail" value="Modifier">
      <input type="password" name="user_pass" value="<?php  echo htmlspecialchars($resultat); ?>">
      <input type="submit" name="update_pass" value="Modifier">
    </form>

<!-- bouton de Retour.-->
<form method = "POST" action = "?Utilisateur">
   <input type='hidden' name='user_id' value= <?php echo $_SESSION['id'] ?>>
   <input type="submit" value='Retour'>
</form>

</body>
</html>