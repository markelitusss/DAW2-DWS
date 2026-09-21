<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <?php 
        echo "<p>Bucle con while:</p>";
        $n = 1;
        while ($n <= 10) {
            echo "$n<br>";
            $n++;
        }

        echo "<p>Bucle con do-while:</p>";
        $n = 1;
        do {
            echo "$n<br>";
            $n++;
        }
        while ($n <= 10);

        echo "<p>Bucle con for:</p>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$i<br>";
        }
    ?>
</body>
</html>