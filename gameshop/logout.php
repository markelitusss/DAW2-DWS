<?php
    declare(strict_types=1);
    require_once 'includes/inicio.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: catalogo.php');
        exit;
    }

    cerrarSesion();

    session_id(session_create_id());
    session_start();
    guardarMensaje('info', 'Has cerrado la sesión.');
    
    header('Location: catalogo.php');
    exit;
?>