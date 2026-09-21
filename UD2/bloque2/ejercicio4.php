<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <?php 
        // usamos la expresión match para saber si es una vocal o no
        // se transorma a minúscula con strtolower() para facilitar las comprobaciones
        $letra = "E";
        $vocal = match (strtolower($letra)) {
            "a", "e", "i", "o", "u" => true,
            default                 => false
        };

        if ($vocal) {
            echo "<p>La letra $letra es una vocal</p>";
        }
        else {
            echo "<p>La letra $letra es una consonante</p>";
        }
    ?>
</body>
</html>