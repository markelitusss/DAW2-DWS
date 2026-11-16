<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["csrf"]) || !isset($_SESSION["csrf"]) || !hash_equals(($_SESSION["csrf"]), $_POST["csrf"])) {
            header("Location: ej5_form_registro.php");
            exit;
        }

        if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
            $nombre = htmlspecialchars($_POST["nombre"]);
        }

        if (isset($_POST["apellidos"]) && !empty($_POST["apellidos"])) {
            $apellidos = htmlspecialchars($_POST["apellidos"]);
        }

        if (isset($_POST["email"]) && !empty($_POST["email"]) && filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (isset($_POST["passwd"]) && !empty($_POST["passwd"])) {
            $passwd = htmlspecialchars($_POST["passwd"]);
        }

        if (isset($_POST["genero"]) && !empty($_POST["genero"]) && in_array($_POST["genero"], ["Masculino", "Femenino", "Otro"])) {
            $genero = htmlspecialchars($_POST["genero"]);
        }

        if (isset($_POST["direccion"]) && !empty($_POST["direccion"])) {
            $direccion = htmlspecialchars($_POST["direccion"]);
        }

        if (isset($_POST["poblacion"]) && !empty($_POST["poblacion"])) {
            $poblacion = htmlspecialchars($_POST["poblacion"]);
        }

        if (isset($_POST["cp"]) && !empty($_POST["cp"])) {
            $cp = htmlspecialchars($_POST["cp"]);
        }

        if (isset($_POST["provincia"]) && !empty($_POST["provincia"])) {
            $provincia = htmlspecialchars($_POST["provincia"]);
        }

        if (!isset($nombre, $apellidos, $email, $passwd, $genero, $direccion, $poblacion, $cp, $provincia)) {
            $error = "Ha ocurrido un error";
        }

        if (isset($error)) {
            $_SESSION["error"] = $error;
            $_SESSION["old_input"] = $_POST;
            header("Location: ej8_sesiones.php");
            exit;
        }
        else {
            if (isset($_SESSION["error"])) {
                unset($_SESSION["error"]);
            }

            $_SESSION["usuario"] = $nombre;
            header("Location: ej8_sesiones.php");
            exit;
        }
    }
    else {
        header("Location: ej8_sesiones.php");
        exit;
    }
?>