<?php
 if (!isset($_SESSION['email']) || isset($_GET['logout'] )) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.html");
 }
?>
