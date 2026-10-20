<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
</head>
<body>
    <h1>Datos recogidos</h1>

    <?php 
        $busqueda = htmlspecialchars($_POST["busqueda"]);
        $buscarEn = htmlspecialchars($_POST["buscarEn"]);
        $tipo = htmlspecialchars($_POST["tipo"]);

        echo "<p>Texto de Búsqueda: $busqueda</p>";
        switch ($buscarEn) {
            case "titulo":
                echo "<p>Buscar en: Título del libro</p>";
                break;
            case "nombre":
                echo "<p>Buscar en: Nombre del Autor</p>";
                break;
            case "editorial":
                echo "<p>Buscar en: Editorial</p>";
                break;
        }

        switch ($tipo) {
            case "narrativa":
                echo "<p>Tipo de Libro: Narrativa</p>";
                break;
            case "libroTexto":
                echo "<p>Tipo de Libro: Libros de texto</p>";
                break;
            case "guiaMapa":
                echo "<p>Tipo de Libro: Guías y Mapas</p>";
                break;
        }
    ?>

    <a href="form_libros.php">Volver al formulario</a>
</body>
</html>
