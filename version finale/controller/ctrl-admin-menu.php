<?php
session_start();
if (isset($_SESSION['id'])) {
    include('view/view-admin-menu.php');
}
?>