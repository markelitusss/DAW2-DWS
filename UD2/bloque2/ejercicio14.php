<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Ejercicio 14</h1>
    <?php 
        // bucle exterior: filas de la figura
        // bucle interior: columnas dentro de cada fila
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }

            // salto de línea
            echo "<br>";
        }
    ?>
</body>
</html>