<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-et-user-compte.css">
    <title>Mon compte</title>
</head>
<body>
    <header>
        <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
    </header>
    <main>
        <form method='post'>
            <input type='text' name='pseudo_admin' value='<?php echo htmlspecialchars($resultat['user_pseudo'], ENT_QUOTES); ?>'>
            <input class='petit-btn' type='submit' name='update_pseudo' value='Modifier le pseudo'>
        </form>
        <form method='post'>
            <input type='mail' name='mail_admin' value='<?php echo htmlspecialchars($resultat['user_mail'], ENT_QUOTES) ?>'>
            <input class='petit-btn' type='submit' name='update_mail' value='Modifier le mail'>
        </form>
        <form method='post'>
            <input type='password' name='pass_admin' value='<?php echo htmlspecialchars($resultat['user_pass'], ENT_QUOTES) ?>'>
            <input class='petit-btn' type='submit' name='update_pass' value='Modifier le password'>
        </form>
    </main>
    <footer>
        <form method='post' action='?admin'>
            <button class='gros-btn' type='submit'>Retour</button>
        </form>
    </footer>
</body>
</html>