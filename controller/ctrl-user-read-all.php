<?php
session_start();
include("pdo.php");

if (isset($_POST['search_user'])){  
        include("model/mod-user-read-all.php"); 
        $_SESSION['result'] = $resultat;        
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pseudo = strtolower($pseudo);
         
        // Vérfication que la bdd de la disponibilite du pseudo
        $stmt = $pdo->prepare('SELECT * FROM users WHERE user_pseudo = :pseudo');
        $stmt->execute(array(
            ":pseudo"=>$pseudo
        ));
        $resultat = $stmt->fetch();
        include('view/view-user-update.php');
       
}else if (isset ($_POST['update_user'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pseudo = strtolower($pseudo);
        $mail = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['password']);
        $pass_hach = password_hash($pass, PASSWORD_DEFAULT);
        $statut = htmlspecialchars($_POST['statut']);
        $id = $_POST['id'];
     
        $requete = "UPDATE users
                SET `user_mail` = :mail,
                    `user_pseudo` = :pseudo,
                    `user_status` = :statut,
                    `user_pass` = :pass
                WHERE user_id = :id";

        $stmt = $pdo->prepare($requete);
        $stmt->execute(array(
            ":mail" => $mail,
            ":pseudo"=>  $pseudo,
            ":statut" => $statut,
            ":pass"=>  $pass_hach,
            ":id"=> $id
        ));
        $count = $stmt->rowCount();
        if ($count==1){
            echo("utilisateur modifié!
        <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
        </form>");
        }else{echo("quelque chose n'a pas fonctionné");}
} else{
    include("view/view-user-read-all.php");
}
?>