<?php

include("mod-pdo.php");
include("mod-user-update.php");

var_dump($resultat);

  if($resultat['user_pseudo']){
      session_start();
      $_SESSION['result'] = $resultat;        
      header("location:index.php?update");

      
      
}else{
    echo "ff";
            }
