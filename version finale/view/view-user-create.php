<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user-create.css">
    <title>Creation utilisateur</title>
</head>
<body>
    <header>
        <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
        <h1>Création utilisateur</h1>
    </header>
    <main>
        <form action="?user-create" method="post">
            <input class='champ' type="text" name="pseudo" placeholder="pseudo" required>
            <input class='champ' type="email" name="email" placeholder="email" required>
            <input class='champ' type="password" name="password"placeholder="Password" required></br>
            <label for="statut">Statut</label>
            <select class='champ' name="statut">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select></br>
            <button class='petit-btn' type="submit">Créer</button>
        </form>
    </main>
    <footer>
        <form method='post' action='?admin'>
            <button class='gros-btn' type='submit'>Retour</button>
        </form>
    </footer>
</body>
</html>