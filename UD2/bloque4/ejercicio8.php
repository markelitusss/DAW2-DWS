<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <?php 
        function factorial($x) {
            if ($x == 1) {
                return $x;
            }
            else {
                return $x * factorial($x - 1);
            }
        }

        echo "Factorial de 5: ".factorial(5);
    ?> 
</body>
</html>