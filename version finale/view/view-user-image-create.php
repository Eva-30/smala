<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/image-create.css">
    <title>Ajouter une image</title>
</head>
<body>   
    <header>
        <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
        <h1>Ajouter une image</h1>
    </header>
    <main>
        <form method='POST' action='?user-image-create' enctype='multipart/form-data'>
            <label for='image_url'>Votre image:</label>
            <input class='champ' type='text' id='image_url' name='image_url' required>
            <label for='image_comment'>Commentaire:</label>
            <input class='champ' type='text' id='image_comment' name='image_comment' required>
            <input type="hidden" id='user_id' name='user_id' value='<? $_SESSION['id']; ?>
            <input class='petit-btn' type='submit' value='Valider'>
        </form>
    </main>
    <footer>
        <form method='post' action='?user'>
            <button class='gros-btn' type='submit'>Retour</button>
        </form>
    </footer>
</body>
</html>