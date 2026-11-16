<?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
            $nombre = htmlspecialchars($_POST["nombre"]);
        }

        if (isset($_POST["color"]) && !empty($_POST["color"])) {
            $color = htmlspecialchars($_POST["color"]);
        }

        if (isset($nombre, $color)) {
            setcookie("nombreusu", $nombre, [
                'expires' => time() + (60 * 5), 
                'path' => '/', 
                'secure' => true, 
                'httponly' => true, 
                'samesite' => 'Strict'
            ]);

            setcookie("colorusu", $color, [
                'expires' => time() + (60 * 5), 
                'path' => '/', 
                'secure' => true, 
                'httponly' => true, 
                'samesite' => 'Strict'
            ]);

            header("Location: ej7_index.php");
            exit;
        }
        else {
            header("Location: ej7_preferencias.php");
            exit;
        }
    }
    else {
        header("Location: ej7_preferencias.php");
        exit;
    }
?>