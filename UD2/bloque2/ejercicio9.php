<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <?php 
        $suma = 0;
        for ($i = 1; $i <= 30; $i++) {
            $suma += $i;
        }

        echo "<p>Suma total: $suma";
    ?>
</body>
</html>