<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
</head>
<body>
    <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
    <form method='post'>
        <input type='text' name='pseudo_admin' value='<?php echo htmlspecialchars($resultat['user_pseudo'], ENT_QUOTES); ?>'>
        <input type='submit' name='update_pseudo' value='Modifier'>
    </form>
    <form method='post'>
        <input type='mail' name='mail_admin' value='<?php echo htmlspecialchars($resultat['user_mail'], ENT_QUOTES) ?>'>
        <input type='submit' name='update_mail' value='Modifier'>
    </form>
    <form method='post'>
        <input type='password' name='pass_admin' value='<?php echo htmlspecialchars($resultat['user_pass'], ENT_QUOTES) ?>'>
        <input type='submit' name='update_pass' value='Modifier'>
    </form>
    <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
    </form>
</body>
</html>