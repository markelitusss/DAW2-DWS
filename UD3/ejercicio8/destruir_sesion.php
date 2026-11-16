<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    unset($_SESSION["usuario"]);

    header("Location: ej8_sesiones.php");
    exit;
?>
