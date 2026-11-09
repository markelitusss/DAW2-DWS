<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $nombre = '';
    $errores = array();
    $error = false;

    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) ||
    !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
        $nombre = htmlspecialchars($_POST["nombre"]);
    }
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email === false || $email === null) {
        header("Location: login.php");
        exit;
    }
    if (isset($_POST["password"])) {
        $password = htmlspecialchars($_POST["password"]);
        if (mb_strlen($password) < 8) {
            array_push($errores, "Debe tener al menos 8 caracteres");
            $error = true;
        }
        if (!preg_match('/[A-Z]/', $password)) {
            array_push($errores, "Debe contener al menos una mayúscula.");
            $error = true;
        }
        if (!preg_match('/[a-z]/', $password)) {
            array_push($errores, "Debe contener al menos una minúscula.");
            $error = true;
        }
        if (!preg_match('/[0-9]/', $password)) {
            array_push($errores, "Debe contener al menos un número.");
            $error = true;
        }
        if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
            array_push($errores, "Debe contener al menos un símbolo (!, @, #, ...).");
            $error = true;
        }

        if ($error) {
            header("Location: login.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php 
        $email = $_POST["email"];
        $password = $_POST["password"];
        session_regenerate_id(true);

        $_SESSION["nombre"] = $nombre;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        echo "<h1>Hola, $nombre</h1>";
        echo "<p>El email pasado es $email</p>";
        echo "<p>Y la contraseña $password</p>";
    ?>
</body>
</html>
