<?php

  /*
  route
  */

  parse_str($_SERVER["QUERY_STRING"], $qs);
  $keys = array_keys($qs); // grab 'em all, if any
  $route = array_shift($keys); // first one
  switch ($route) {

    case "login":
      include("controller/ctrl-login-check.php"); /* login la base kwa*/
      break;

    case "login-check": /* Authentification */
      include("controller/ctrl-login-checkin.php");
      break;

    case "admin": /* Espace image de l'admin */
        include("controller/ctrl-image-admin-read-all.php");
        break;

    case "logout": /* Casse toi tu pues et marche à l'ombre */
      include("controller/ctrl-logout.php");
      break;

    case "user": /* Espace image de l'utilisateur */
      include("controller/ctrl-image-user-read-all.php");
      break;
    
    case "admin-menu" : /* Menu de l'admin */
      include("controller/ctrl-admin-menu.php");
    break;

    case "image-create": /* Création de l'image, 'fin ajout */
      include("controller/ctrl-image-create.php");
      break;

    case "check-image-create": /* Confirmation de l'ajout */
        include("controller/ctrl-check-image-create.php");
        break;

    case "user-menu": /* Menu de l'utililsateur où il fera ses modifs */ 
      include("controller/ctrl-user-menu.php");
      break;

    case "admin-compte": /* Compte de l'admin */
      include("controller/ctrl-admin-compte.php");
      break;

    case "user-create": /* Création d'un pégu*/
      include("controller/ctrl-user-create.php");
      break;

    case "user-read-all": /* Voir tous les autres pégus */
        include("controller/ctrl-user-read-all.php");
        break;

    case "user-delete": /* Assassiner un pégu */
         include("controller/ctrl-user-delete.php"); 
        break;
/* Faudrait peut-etre rajouter des confirmation d'ajout, suppression et update */
    default:
      include("view/view-login.php");
      break;

  }

  /*
  EOF
  
  */

  exit;