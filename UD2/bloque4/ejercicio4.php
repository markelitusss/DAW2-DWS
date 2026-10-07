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
        function calcularDto($precio, $descuento = 0) {
            // precio original - descuento
            return $precio - ($precio * $descuento / 100);
        }

        echo "Precio 1: ".calcularDto(230, 10)." €";
        echo "<br>Precio 2: ".calcularDto(90)." €";
    ?>
</body>
</html>