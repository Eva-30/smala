
<?php

  /*

  route

  */

  parse_str($_SERVER["QUERY_STRING"], $qs);
  /* var_dump($qs); */
  $keys = array_keys($qs); // grab 'em all, if any
  $route = array_shift($keys); // first one

  var_dump($_SERVER["QUERY_STRING"]);


  switch ($route) {

    case "login":
      include("ctrl-login-check.php");
      break;

       

    case "admin":
      include("view-admin.php");
      break;
    
  

    default:
      include("view-login.php");
      break;

  }

  /*

  EOF
  
  */

  exit;