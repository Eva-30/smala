<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-menu.css">
    <title>Menu administrateur</title>
</head>
<body>
    <header>
        <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
    </header>
    <main>
        <form method='post' action='?admin-compte'>
            <input type='hidden' name='user_id' value= <?php echo $_SESSION['id'] ?> >
            <button class='gros-btn' type='submit'>Mon compte</button>
        </form>
        <form method='post' action='?user-create'>
            <button class='gros-btn' type='submit'>Créer un utilisateur</button>
        </form>
        <form method='post' action='?user-read-all'>
            <button class='gros-btn' type='submit'>Modifier un utilisateur</button>
        </form>
    </main>
    <footer>
        <form method='post' action='?admin'>
            <button class='petit-btn' type='submit'>Retour</button>
        </form>
    </footer>
</body>
</html>