<?php

if(isset($_POST['update_pseudo'])){
    try {
      $req = "UPDATE `users` SET 
        `user_pseudo` = :user_pseudo,
              WHERE `user_id` = :user_id";
      $prep = $pdo->prepare($req);
      $prep->execute();
      return $prep;
    } catch (PDOException $e) {
      $pdo = NULL; // bye db
      exit("OOPS - DB error : " . $e->getMessage());
    }
}
if(isset($_POST['update_mail'])){
    try {
      $req = "UPDATE `users` SET 
        `user_mail` = :user_mail,
              WHERE `user_id` = :user_id";
      $prep = $pdo->prepare($req);
      $prep->execute();
      return $prep;
    } catch (PDOException $e) {
      $pdo = NULL; // bye db
      exit("OOPS - DB error : " . $e->getMessage());
    }
}
if(isset($_POST['update_pass'])){
    try {
      $req = "UPDATE `users` SET 
        `user_pass` = :user_pass
              WHERE `user_id` = :user_id";
      $prep = $pdo->prepare($req);
      $prep->execute();
      return $prep;
    } catch (PDOException $e) {
      $pdo = NULL; // bye db
      exit("OOPS - DB error : " . $e->getMessage());
    }
}
?>