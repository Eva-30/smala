<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
if (!empty($_SESSION)) $_SESSION = []; // tableau vidé
if (isset($_COOKIE[session_name()])) setcookie(session_name(), "", time()-1, "/"); // cookie viré
//setcookie('login', '');
//setcookie('pass_hache', '');