<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
        * {
            margin-left: 10px;
        }

        label {
            margin-left: 0px;
        }
    </style>
</head>
<body>
    <h1>Buscador de Libros</h1>
    <form action="result_libros.php" method="POST">
        <label for="busqueda">Texto de Búsqueda</label> <br>
        <input type="text" name="busqueda"> <br> <br>
        
        <label for="buscarEn">Buscar en</label> <br> <br>
        <input type="radio" name="buscarEn" value="titulo">
        <label for="buscarEn">Título del libro</label> <br>
        <input type="radio" name="buscarEn" value="nombre">
        <label for="buscarEn">Nombre del Autor</label> <br>
        <input type="radio" name="buscarEn" value="editorial">
        <label for="buscarEn">Editorial</label> <br> <br>

        <label for="tipo">Tipo de Libro:</label>
        <select name="tipo">
            <option value="narrativa">Narrativa</option>
            <option value="libroTexto">Libros de texto</option>
            <option value="guiaMapa">Guías y mapas</option>
        </select>
        <br> <br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>