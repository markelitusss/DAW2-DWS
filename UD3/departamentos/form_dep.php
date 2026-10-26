<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
        unset($_SESSION["error"]);
    }
    if (isset($_SESSION["old_input"])) {
        $old = $_SESSION["old_input"];
        unset($_SESSION["old_input"]);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
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
        <?php if(isset($error)){ ?>
            <div class="mt-4 alert alert-danger">
                <p class="mb-1"><i class="bi bi-exclamation-triangle-fill"></i><?php echo $error?></p>
            </div>
        <?php } ?>
        <h1>Formulario Departamento</h1>
        <form action="presupuesto.php" method="POST">
            <label for="dep" class="form-label">Nombre del departamento</label>
            <?php $dep_check = isset($old) ? $old : "" ?>
            <select name="dep" id="dep" class="mb-3 form-select form-select-lg">
                <option selected>Selecciona una opción</option>
                <option value="INFORMÁTICA" <?= $dep_check === "INFORMÁTICA" ? "selected" : "" ?>>INFORMÁTICA</option>
                <option value="LENGUA" <?= $dep_check === "LENGUA" ? "selected" : "" ?>>LENGUA</option>
                <option value="MATEMÁTICAS" <?= $dep_check === "MATEMÁTICAS" ? "selected" : "" ?>>MATEMÁTICAS</option>
                <option value="INGLÉS" <?= $dep_check === "INGLÉS" ? "selected" : "" ?>>INGLÉS</option>
            </select>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
</body>
</html>