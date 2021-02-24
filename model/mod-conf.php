<?php

  const DB_HOST    = "localhost";
  const DB_NAME    = "smala";
  const DB_LOGIN   = "evab";
  const DB_PASS    = "paprika";

  const DB_DRIVER  = "mysql";
  const DB_CHARSET = "utf8mb4";

  const DB_OPTIONS = [
    PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // turn on errors in the form of exceptions, good for dev (so no good for prod ^^)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // make the default fetch be an associative array
    PDO::MYSQL_ATTR_FOUND_ROWS   => true // track affected SQL rows, using rowCount
  ];

  try {
    // initiate object from class
    $pdo = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PASS, DB_OPTIONS);
  } catch (PDOException $e) {
    $pdo = NULL; // close connexion
    exit("OOPS - DB error : " . $e->getMessage());
  }