<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu administrateur</title>
</head>
<body>
    <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
    <form method='post' action='?admin-compte'>
        <input type='hidden' name='user_id' value= <?php echo $_SESSION['id'] ?> >
        <button type='submit'>Mon compte</button>
    </form>
    <form method='post' action='?user-create'>
        <button type='submit'>Créer un utilisateur</button>
    </form>
    <form method='post' action='?user-read-all'>
        <button type='submit'>Modifier un utilisateur</button>
    </form>
    <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
    </form>
</body>
</html>