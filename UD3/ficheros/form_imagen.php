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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
        <h1 class="mt-2">Ejercicio 3</h1>
        <?php if(isset($error)) {?>
            <div class="mt-3 alert alert-danger">
                <p><?php echo $error?></p>
            </div>
        <?php } ?>
        <form action="subir_imagen.php" method="POST" enctype="multipart/form-data" class="d-flex flex-column w-50">
            <label for="image" class="form-label">Subir imagen:</label>
            <input type="file" name="image">
            <label for="titulo" class="form-label mt-2">Título</label>
            <input type="text" name="titulo" value="<?= isset($old) ? htmlspecialchars($old) : "" ?>" required>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
    </main>
</body>
</html>