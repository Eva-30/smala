<?php
include("pdo.php");
include("model/mod-check-login.php");
$pseudo = htmlspecialchars($resultat['user_pseudo']);
$isPasswordCorrect = password_verify($pass, $resultat['user_pass']);
$id = htmlspecialchars($resultat['user_id']);
    
    if ($isPasswordCorrect) {

        session_start();
        $_SESSION['pseudo'] =$pseudo;
        $_SESSION['id'] =$id;
       
        // Orientation en fonction du statut si admin -> interface admin
        if($resultat['user_status'] === "admin"){
            
            echo $_SESSION['pseudo'];
            echo 'Vous êtes connecté !';
            header("location:?admin");

        // Orientation en fonction du statut si user -> interface user
        }elseif ($resultat['user_status'] === "user") {
            echo 'Vous êtes connecté !';
            header("location:?user");
        }

    }else {
        echo "erreur"; 
    }
?>