<?php
// on va chercher toutes les images de la DB
try {
    $req = "SELECT * FROM `images`";
    $prep = $pdo->prepare($req);
    $prep->execute();
    return $prep;
  } catch (PDOException $e) {
    $pdo = NULL; // bye db
    exit("OOPS - DB error : " . $e->getMessage());
  }
?>