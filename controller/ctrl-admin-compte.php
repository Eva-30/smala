<?php
session_start();
include('pdo.php');
include('model/mod-admin-compte.php');

if (isset($_POST['update_pseudo'])){
    $pseudo = $_POST['pseudo_admin'];
    $req_update_pseudo = "UPDATE `users` SET `user_pseudo` = :pseudo WHERE `user_id`= :id";
    $prepare_update_pseudo = $pdo->prepare($req_update_pseudo);
    $prepare_update_pseudo -> execute(array(
        ':pseudo' => $pseudo,
        ':id' => $user_id
    ));
    $count = $prepare_update_pseudo->rowCount();
    if ($count==1){
        echo("<p>pseudo modifié!</p>
        <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
        </form>");
    }

}else if (isset($_POST['update_mail'])){
    $mail = $_POST['mail_admin'];
    $req_update_mail = "UPDATE `users` SET `user_mail` = :mail WHERE `user_id`= :id";
    $prepare_update_mail = $pdo->prepare($req_update_mail);
    $prepare_update_mail -> execute(array(
        ':mail' => $mail,
        ':id' => $user_id
    ));
    $count = $prepare_update_mail->rowCount();
    if ($count==1){
        echo("<p>mail modifié!</p>
        <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
        </form>");
    }
}else if (isset($_POST['update_pass'])){
    $pass = password_hash($_POST['pass_admin'], PASSWORD_DEFAULT);
    $req_update_pass = "UPDATE `users` SET `user_pass` = :pass WHERE `user_id`= :id";
    $prepare_update_pass = $pdo->prepare($req_update_pass);
    $prepare_update_pass -> execute(array(
        ':pass' => $pass,
        ':id' => $user_id
    ));
    $count = $prepare_update_pass->rowCount();
    if ($count==1){
        echo("<p>mot de passe modifié!</p>
        <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
        </form>");
    }
}else {
    include('view/view-admin-compte.php');
}

?>