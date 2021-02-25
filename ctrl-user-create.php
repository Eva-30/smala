<?php

include("mod-pdo.php");
include("mod-user-create.php");

  if(!$resultat){
               
                    $stmt = $pdo->prepare('INSERT INTO users (`user_mail`,`user_pass`,`user_pseudo`,`user_status`) VALUES (:mail, :pass, :pseudo, :statut)');
                    $stmt->execute(array(
                    ':mail' => $mail,
                    ':pass' => $pass_hach,
                    ':pseudo' => $pseudo,
                    ':statut' => $statut
                ));

            }else{
                echo "Pseudo non disponible";
            }
