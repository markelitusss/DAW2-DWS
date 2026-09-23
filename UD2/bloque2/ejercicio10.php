<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <?php 
        // almacenamos la letra y la letra en minúscula
        $letra = "O";
        $letraLower = strtolower($letra);

        // is_numeric comprueba si es un número o no
        // usamos la variable letraLower para facilitar las comprobaciones
        if (is_numeric($letra)) {
            echo "<p>El caracter $letra es una cifra";
        }
        else if ($letraLower == 'a' || $letraLower == 'e' || $letraLower == 'i' || $letraLower == 'o' || $letraLower == 'u') {
            echo "<p>La letra $letra es una vocal";
        }
        else {
            echo "<p>La letra $letra es una consonante";
        }
    ?>
</body>
</html>