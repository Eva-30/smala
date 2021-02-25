<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/b3bd20c615.js" crossorigin="anonymous"></script>
    <title>LOGIN</title>
</head>
<body>

    <h1>Création utilisateur</h1>
  
    <div class="container">
    
        <div class="content">
            <h1>Login</h1>
            <form action="mod-user-create.php" method="post">
            <p><i class="fas fa-user"></i> <input type="text" name="pseudo" placeholder="pseudo" required></p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email" placeholder="email" required></p>
            <p><i class="fas fa-unlock-alt"> </i><input type="password" name="password"placeholder="Password" required></p>
            
            <label for="statut">Statut</label>
            <select name="statut">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            
            </p>
            <button type="submit" class="btn">Créer</button>
            </form>
        </div>
    
    </div>


</body>
</html>