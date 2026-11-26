<?php 
    function usuarioActual(): ?array {
        return $_SESSION['usuario'] ?? null;
    }

    function iniciarSesion(array $usuario): void {
        session_regenerate_id(true);
        $_SESSION["usuario"] = ["id" => $usuario["id"], "nombre" => $usuario["nombre"], "email" => $usuario["email"]];
    }

    function cerrarSesion(): void {
        $_SESSION = [];
        setcookie(session_name(), '', [
            'expires' => time() - 3600,
            'path' => '/',
            'httponly' => true, 
            'samesite' => 'Lax',
            'secure' => isset($_SERVER['HTTPS']),
        ]);

        session_destroy();
    }

    function requerirLogin(string $paginaActual): void {
        if (usuarioActual() === null) {
            guardarMensaje('warning', 'Inicia sesión para continuar.');
            header('Location: login.php?volver=' . urlencode($paginaActual));
            exit;
        }
    }
?>