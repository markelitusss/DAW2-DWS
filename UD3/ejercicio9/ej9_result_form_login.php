<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!isset($_POST["csrf"]) || !isset($_SESSION["csrf"]) || !hash_equals(($_SESSION["csrf"]), $_POST["csrf"])) {
            header("Location: ej9_form_login.php");
            exit;
        }

        if (($_POST["user"] === "usuario" || $_POST["user"] === "admin") && $_POST["passwd"] == 1234) {
            session_regenerate_id(true);
        
            $_SESSION["usuario"] = htmlspecialchars($_POST["user"]);
            $_SESSION["rol"] = match ($_SESSION["usuario"]) {
                "usuario" => 2,
                "admin" => 1
            };
        }
        else {
            $errores = "Los datos no son correctos";
        }

        if (!empty($errores)) {
            $_SESSION["errores"] = $errores;
            $_SESSION["old_input"] = $_POST["user"];
            header("Location: ej9_form_login.php");
            exit;
        }
        else {
            if (isset($_SESSION["errores"])) {
                unset($_SESSION["errores"]);
            }
        }
    }
    else {
        header("Location: ej9_form_login.php");
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
<body style="background-color: <?= $_SESSION["rol"] === 1 ? "aquamarine" : "lightsalmon" ?>;">
    <main class="container">
        <h1>Hola, <?= $_SESSION["usuario"] ?></h1>
        <a href="destruir_sesion.php" class="btn btn-danger">Cerrar sesión</a>
    </main>
</body>
</html>