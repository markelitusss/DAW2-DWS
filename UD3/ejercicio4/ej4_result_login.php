<?php 
    $errores = [];
    $input = [
        "email" => "",
        "password" => ""
    ];

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["csrf"]) || !isset($_SESSION["csrf"]) || !hash_equals(($_SESSION["csrf"]), $_POST["csrf"])) {
            header("Location: ej4_form_login.php");
            exit;
        }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if (!$email) {
            array_push($errores, "El email no tiene un formato válido");
        }

        if (isset($_POST["passwd"]) && !empty($_POST["passwd"])) {
            $passwd = htmlspecialchars($_POST["passwd"]);

            if (mb_strlen($passwd)< 8) {
                array_push($errores, "La contraseña debe tener al menos 8 caracteres");
            }
            if (!preg_match("/[A-Z]/", $passwd) || !preg_match("/[a-z]/", $passwd)) {
                array_push($errores, "La contraseña debe contener al menos una mayúscula y una minúscula");
            }
            if (!preg_match("/[0-9]/", $passwd)) {
                array_push($errores, "La contraseña debe contener al menos un número");
            }
            if (!preg_match("/[^a-zA-Z0-9]/", $passwd)) {
                array_push($errores, "La contraseña debe contener al menos un carácter especial");
            }
        }
        else {
            array_push($errores, "La contraseña no puede estar vacía");
        }

        if (!empty($errores)) {
            $_SESSION["errores"] = $errores;
            $_SESSION["old_input"] = $_POST["email"];
            header("Location: ej4_form_login.php");
            exit;
        }
        else {
            if (isset($_SESSION["errores"])) {
                unset($_SESSION["errores"]);
            }

            $input["email"] = $email;
            $input["password"] = $passwd;
        }
    }
    else {
        header("Location: ej4_form_login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
</head>
<body>
    <main class="container">
        <h1 class="mt-3">Datos enviados</h1>
        <p><strong>Email: </strong> <?= $input["email"] ?></p>
        <p><strong>Contraseña: </strong><?= $input["password"] ?></p>
        <a href="ej4_form_login.php" class="btn btn-secondary">Volver al formulario</a>
    </main>
</body>
</html>