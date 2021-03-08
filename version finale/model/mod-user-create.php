<?php
if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['statut'])){
    try{
        $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pseudo = strtolower($pseudo);
        $mail = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['password']);
        $pass_hach = password_hash($pass, PASSWORD_DEFAULT);
        $statut = htmlspecialchars($_POST['statut']);
     
        // Vérfication que la bdd de la disponibilite du pseudo

        $stmt = $pdo->prepare('SELECT * FROM users WHERE user_pseudo = :pseudo');
        $stmt->execute(array(
                ":pseudo"=>$pseudo
            ));
        $resultat = $stmt->fetch(); 
        return $resultat;

    }catch(PDOException $e) {
     
        // en cas d'erreur, on récup et on affiche, grâce à notre try/catch
        exit("❌🙀💀 OOPS :\n" . $e->getMessage());
    }
}