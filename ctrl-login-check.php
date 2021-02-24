<?php

include("mod-pdo.php");
include("mod-check-login.php");


/* if (!$resultat)
{
    header("location:view-login.php");
}
else
{ */

    echo $isPasswordCorrect;
    var_dump($resultat); 
    $pseudo = htmlspecialchars($resultat['user_pseudo']);


    if ($isPasswordCorrect) {

        session_start();
       $_SESSION['pseudo'] =$pseudo;
        
        // Orientation en fonction du statut si admin -> interface admin
        if($resultat['user_status'] === "admin"){
            
            echo $_SESSION['pseudo'];
            echo 'Vous êtes connecté !';
            header("location:?admin");

        // Orientation en fonction du statut si user -> interface user
        }elseif ($resultat['user_status'] === "user") {
            $_SESSION['id'] = $resultat['id'];
            echo 'Vous êtes connecté !';
            header("location:?user");
        }

    }
    else {
    
        echo "erreur";
       
    }
