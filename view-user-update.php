<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/b3bd20c615.js" crossorigin="anonymous"></script>
    <title>Update</title>
</head>
<body>

<h2>Modifier l'utilisateur</h2>

<form action="" method="post">

            <p><i class="fas fa-user"></i> <input type="text" name="pseudo"  value="<?=$_SESSION['result']['user_pseudo']?>"></p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email"  value="<?=$_SESSION['result']['user_mail']?>"></p>
            <p><i class="fas fa-unlock-alt"> </i><input type="password" value="<?=$_SESSION['result']['user_pass']?>" name="password"placeholder="Password" required></p>
            
            
            <p>Vous êtes <?=$_SESSION['result']['user_status'] ?></p>
            <label for="statut">Je modifie mon statut</label>
            <select name="statut" value="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            
            </p>
            <input type="submit" name="update">
            </form>



<?php


include('mod-pdo.php');


if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['statut']) ){

      try{
     
            $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);

            $pseudo = htmlspecialchars($_POST['pseudo']);

            $pseudo = strtolower($pseudo);


             $mail = htmlspecialchars($_POST['email']);
             $pass = htmlspecialchars($_POST['password']);

             $pass_hach = password_hash($pass, PASSWORD_DEFAULT);

             $statut = htmlspecialchars($_POST['statut']);
     
            $requete = "UPDATE users
                SET `user_mail` = :mail,
                    `user_pseudo` = :pseudo,
                    `user_status` = :status,
                    `user_pass` = :pass
                WHERE user_id = :id";

    $stmt = $pdo->prepare($requete);
    $stmt->execute(array(
      ":mail" => $mail,
      ":pseudo"=>  $pseudo,
       ":status" => $statut,
      ":pass"=>  $pass_hach,
      ":id"=> $_SESSION['result']['user_id']
    ));

    
}catch(PDOException $e){
     
             // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
             exit("❌🙀💀 OOPS :\n" . $e->getMessage());
     
             }
            }
?>

</body>
</html>