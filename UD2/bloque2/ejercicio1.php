<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php 
        $num = 5;

        // para comprobar si es par o no vemos si es divisible por 2
        if ($num % 2 == 0) {
            echo "<p>El número $num es par</p>";
        }
        else {
            echo "<p>El número $num es impar</p>";
        }
    ?>
</body>
</html>