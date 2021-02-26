<?php
include("pdo.php");
include("model/mod-user-create.php");

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['statut'])){
    if(!$resultat){
    $stmt = $pdo->prepare('INSERT INTO users (`user_mail`,`user_pass`,`user_pseudo`,`user_status`) VALUES (:mail, :pass, :pseudo, :statut)');
    $stmt->execute(array(
    ':mail' => $mail,
    ':pass' => $pass_hach,
    ':pseudo' => $pseudo,
    ':statut' => $statut
    ));
    $count = $stmt->rowCount();
    if ($count==1){
        echo("utilisateur créé!
        <form method='post' action='?admin'>
        <button type='submit'>Retour</button>
        </form>");
    }else{echo("quelque chose n'a pas fonctionné");}
}else{
    echo "Pseudo non disponible";
    }
}else{
    include("view/view-user-create.php");
}