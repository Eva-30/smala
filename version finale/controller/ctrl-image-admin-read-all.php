<?php
session_start();
if (isset($_SESSION['id'])) {
    include("pdo.php");
    include("model/mod-image-admin-read-all.php");
    include('model/mod-admin-compte.php');
    include("view/view-image-admin-read-all.php");
exit;   
}

?>