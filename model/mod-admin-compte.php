<?php
$user_id=$_SESSION['id'];
$req = $pdo->prepare('SELECT * FROM users WHERE user_id = :user_id');
$req->execute(array(
    ':user_id' => $user_id));
$resultat = $req->fetch();
?>