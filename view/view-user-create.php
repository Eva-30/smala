<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation utilisateur</title>
</head>
<body>
    <h1>Création utilisateur</h1>
    <form action="?user-create" method="post">
        <input type="text" name="pseudo" placeholder="pseudo" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password"placeholder="Password" required>
        <label for="statut">Statut</label>
        <select name="statut">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <button type="submit">Créer</button>
    </form>

    <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
    </form>
</body>
</html>