<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio 11</h1>
    <?php 
        $num = 5616512;
        $cifras = 1;

        // dividimos entre 10 para ir sacando cifras
        // el número de cifras empieza en 1 porque nunca vamos a dividir un número menor a 10
        for ($i = $num; $i > 9; $i /= 10) {
            $cifras++;
        }

        echo "<p>El número $num tiene $cifras cifras";
    ?>
</body>
</html>