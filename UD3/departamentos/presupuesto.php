<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (in_array($_POST["dep"], ["INFORMÁTICA", "LENGUA", "MATEMÁTICAS", "INGLÉS"])) {
            $dep = htmlspecialchars($_POST["dep"]);
        }
        else {
            $error = "Debes seleccionar una opción en el menú desplegable";
        }

        if (isset($error)) {
            $_SESSION["error"] = $error;
            $_SESSION["old_input"] = $_POST["dep"];
            header("location:form_dep.php");
            exit;
        }
        else {
            if (isset($_SESSION["error"])) {
                unset($_SESSION["error"]);
            }
        }
    }
    else {
        header("location:form_dep.php");
        exit;
    }

    $presupuesto = match ($dep) {
        "INFORMÁTICA" => "500 €",
        "LENGUA" => "300 €",
        "MATEMÁTICAS" => "300 €",
        "INGLÉS" => "400 €"
    };
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
        <h1>Resultado</h1>
        <?php 
            echo "<p>El presupuesto asignado para el departamento de <strong>$dep</strong> es de <u>$presupuesto</u></p>";
        ?>
        <a class="btn btn-secondary" href="form_dep.php">Volver al formulario</a> 
    </main>
</body>
</html>