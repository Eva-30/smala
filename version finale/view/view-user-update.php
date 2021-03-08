<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user-update.css">
    <title>Modifier un utilisateur</title>
</head>
<body>
    <header>
        <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
        <h1>Modifier un utilisateur</h1>
    </header>
    <main>
        <form method="post">
            <input class='champ' type="hidden" name="id" value="<?=$_SESSION['result']['user_id']?>">
            <input class='champ' type="text" name="pseudo"  value="<?=$_SESSION['result']['user_pseudo']?>">
            <input class='champ' type="email" name="email"  value="<?=$_SESSION['result']['user_mail']?>">
            <input class='champ' type="password" value="<?=$_SESSION['result']['user_pass']?>" name="password" placeholder="Password" required>
            <p>Vous êtes <?=$_SESSION['result']['user_status'] ?></p>
            <label for="statut">Je modifie mon statut</label>
            <select class='champ' name="statut" value="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input class='petit-btn' type="submit" name="update_user" value="modifier cet utilisateur">
        </form>
        <form method="post">
            <label>Ou</label>
            <input type="hidden" name="id" value="<?=$_SESSION['result']['user_id']?>">
            <input class='petit-btn' type="submit" name="delete_user" value="Supprimer cet utilisateur">
        </form>
    </main>
    <footer>
        <form method='post' action='?admin'>
            <button class='gros-btn' type='submit'>Retour</button>
        </form>
    </footer>
</body>
</html>