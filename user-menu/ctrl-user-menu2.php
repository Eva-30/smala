<?php 
session_start();
include('pdo.php');
include('model/mod-user-menu2.php');
include('assets/css/utilisateur-menu.css');

if(isset($_POST['update_pseudo'])){
    $pseudo = $_POST['user_pseudo'];
    $reqUpdatePseudo = "UPDATE `users` SET `user_pseudo` = :pseudo 
                        WHERE `user_id` = :id";
    $prepUpdatePseudo = $pdo->prepare($reqUpdatePseudo);
    $prepUpdatePseudo->execute(array(
        ':pseudo' => $pseudo,
        ':id'     => $userId
    ));
    $count = $prepUpdatePseudo->rowCount();
    if ($count==1){
        echo("Votre pseudo est bien modifié.
            <form method='post' action='?user'>
            <button type='submit'>Retour</button>
            </form>");
    }

}elseif(isset($_POST['update_mail'])){
    $mail = $_POST['user_mail'];
    $reqUpdateMail = "UPDATE `users` SET `user_mail` = :mail
                      WHERE `user_id` = :id";
    $prepUpdateMail = $pdo->prepare($reqUpdateMail);
    $prepUpdateMail->execute(array(
        ':mail' => $mail,
        ':id'   => $userId
    ));
    $count = $prepUpdateMail->rowCount();
    if ($count==1){
        echo("Votre mail est bien modifié
        <form method='post' action='?user'>
        <button type='submit'>Retour</button>
        </form>");
    }

}else if (isset($_POST['update_pass'])){
    $pass = password_hash($_POST['user_pass'], PASSWORD_DEFAULT);
    $reqUpdatePass = "UPDATE `users` SET `user_pass` = :pass WHERE `user_id`= :id";
    $prepUpdatePass = $pdo->prepare($reqUpdatePass);
    $prepUpdatePass -> execute(array(
        ':pass' => $pass,
        ':id' => $userId
    ));
    $count = $prepUpdatePass->rowCount();
    if ($count==1){
        echo("Votre mot de passe est bien modifié
        <form method='post' action='?user'>
        <button type='submit'>Retour</button>
        </form>");
    }
}else {
    include('view/view-user-menu2.php');
}
?>