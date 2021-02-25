<?php

//doit contenir les infos de connexions PDO
include("pdo.php");

// doit contenir les infos de lecture(R) 
// read (all users)
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

