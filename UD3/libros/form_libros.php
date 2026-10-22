<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
        unset($_SESSION["error"]);
    }
    else {
        $error = [];
    }

    if (isset($_SESSION["old_input"])) {
        $old = $_SESSION["old_input"];
        unset($_SESSION["old_input"]);
    }
    else {
        $old = [];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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
        <div class="col-4 mt-4">
            <?php
                if(!empty($error)){
                    print '<div class="alert alert-danger">';
                    foreach($error as $err) {
                        print '<p class="mb-1"><i class="bi bi-exclamation-triangle-fill"></i> '.$err.'</p>';
                    }
                    print '</div>';
                }
            ?>
        </div>
        <h1>Buscador de Libros</h1>
        <form action="result_libros.php" method="POST">
        <div class="mb-3">
            <label for="buscar" class="form-label">Texto de Búsqueda</label>
            <input 
                type="text" 
                class="form-control" 
                name="busqueda" 
                id="busqueda"
                value="<?= isset($old["busqueda"]) ? htmlspecialchars($old["busqueda"]) : "" ?>"
                required
            >
        </div>
        <?php $buscarEn_check = isset($old['buscarEn']) ? $old['buscarEn'] : 'Título'; ?>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="buscarEn" id="titulo" value="Título"
            <?= $buscarEn_check === "Título" ? "checked" : "" ?> />
            <label for="titulo" class="form-check-label">Título del libro</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="buscarEn" id="autor" value="Autor"
            <?= $buscarEn_check === "Autor" ? "checked" : "" ?> />
            <label for="autor" class="form-check-label">Nombre del Autor</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="buscarEn" id="editorial" value="Editorial"
            <?= $buscarEn_check === "Editorial" ? "checked" : "" ?> />
            <label for="editorial" class="form-check-label">Editorial</label>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Libro</label>
            <?php $tipo_check = isset($old["tipo"]) ? $old["tipo"] : "" ?>
            <select class="form-select form-select-lg" name="tipo" id="tipo">
                <option selected>Selecciona una opción</option>
                <option value="Narrativa" <?= $tipo_check === "Narrativa" ? "selected" : "" ?>>Narrativa</option>
                <option value="Libros de Texto" <?= $tipo_check === "Libros de texto" ? "selected" : "" ?>>Libros de texto</option>
                <option value="Guías y Mapas" <?= $tipo_check === "Guías y Mapas" ? "selected" : "" ?>>Guías y Mapas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </main>
</body>
</html>