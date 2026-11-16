<?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["nombreusuario"]) && !empty($_POST["nombreusuario"])) {
            $user = htmlspecialchars($_POST["nombreusuario"]);
        }

        if (isset($_POST["idioma"]) && !empty($_POST["idioma"])) {
            $idioma = htmlspecialchars($_POST["idioma"]);
        }

        if (isset($user, $idioma)) {
            setcookie("nombreusuario", $user, [
                'expires' => time() + (60 * 10), 
                'path' => '/', 
                'secure' => true, 
                'httponly' => true, 
                'samesite' => 'Strict'
            ]);

            setcookie("idioma", $idioma, [
                'expires' => time() + (60 * 10), 
                'path' => '/', 
                'secure' => true, 
                'httponly' => true, 
                'samesite' => 'Strict'
            ]);
        }
        
        header("Location: ej6_cookies.php");
        exit;
    }
    else {
        header("Location: ej6_cookies.php");
        exit;
    }

?>