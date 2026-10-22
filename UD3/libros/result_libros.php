<?php
    $error = [];
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["busqueda"]) && !empty($_POST["busqueda"])) {
            $busqueda = htmlspecialchars($_POST["busqueda"]);
        } 
        else {
            array_push($error, "Debes introducir un valor en el campo de búsqueda");
        }

        if (isset($_POST["buscarEn"])) {
            $buscarEn = htmlspecialchars($_POST["buscarEn"]);
        } 
        else {
            array_push($error, "Debes seleccionar una de las tres opciones disponibles");
        }

        if (isset($_POST["busqueda"]) && in_array($_POST["tipo"], ["Narrativa", "Libros de texto", "Guías y Mapas"])) {
            $tipo = htmlspecialchars($_POST["tipo"]);
        } 
        else {
            array_push($error, "Debes seleccionar un valor en el menú desplegable");
        }

        if (!empty($error)) {
            $_SESSION["error"] = $error;
            $_SESSION["old_input"] = $_POST;
            header("location:form_libros.php");
            exit;
        } 
        else {
            if (isset($_SESSION["error"])) {
                unset($_SESSION["error"]);
            }
        }
    } 
    else {
        header("location:form_libros.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <main class="container">
        <h1>Datos recogidos</h1>
        <p>El valor buscado es: <strong><?= $busqueda ?></strong></p>
        <p>Has elegido buscar por: <strong><?= $buscarEn ?></strong></p>
        <p>Has seleccionado el tipo: <strong><?= $tipo ?></strong></p>
        <a href="form_libros.php" class="btn btn-primary">&larr; Volver al Formulario</a>
    </main>
</body>

</html>