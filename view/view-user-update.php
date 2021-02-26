<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/b3bd20c615.js" crossorigin="anonymous"></script>
    <title>Modifier un utilisateur</title>
</head>
<body>

<h2>Modifier l'utilisateur</h2>
<form method="post">
    <input type="hidden" name="id" value="<?=$_SESSION['result']['user_id']?>">
    <input type="text" name="pseudo"  value="<?=$_SESSION['result']['user_pseudo']?>">
    <input type="email" name="email"  value="<?=$_SESSION['result']['user_mail']?>">
    <input type="password" value="<?=$_SESSION['result']['user_pass']?>" name="password" placeholder="Password" required>
    <p>Vous êtes <?=$_SESSION['result']['user_status'] ?></p>
    <label for="statut">Je modifie mon statut</label>
    <select name="statut" value="">
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select>
    <input type="submit" name="update_user">
</form>

<form method="post">
    <input type="hidden" name="id" value="<?=$_SESSION['result']['user_id']?>">
    <input type="submit" name="delete_user" value="Supprimer cet utilisateur">
</form>

<form method='post' action='?admin'>
    <button type='submit'>Retour</button>
</form>
</body>
</html>