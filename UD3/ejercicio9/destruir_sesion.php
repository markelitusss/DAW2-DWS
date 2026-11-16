<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    unset($_SESSION["usuario"]);
    unset($_SESSION["rol"]);

    header("Location: ej9_form_login.php");
    exit;
?>