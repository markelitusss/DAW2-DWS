<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <?php 
        $num1 = 5;
        $num2 = -8;

        if ($num1 > 0 && $num2 > 0) {
            echo "<p>Los dos números son positivos</p>";
        }
        else if (($num1 > 0 && $num2 < 0) || ($num1 < 0 && $num2 > 0)) {
            echo "<p>Uno de los números es positivo</p>";
        }
        else {
            echo "<p>Ninguno de los números es positivo</p>";
        }
    ?>
</body>
</html>