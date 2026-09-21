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
        echo "<p>Bucle con while:</p>";
        $n = 10;
        while ($n > 0) {
            echo "$n<br>";
            $n--;
        }

        echo "<p>Bucle con do-while:</p>";
        $n = 10;
        do {
            echo "$n<br>";
            $n--;
        }
        while ($n > 0);

        echo "<p>Bucle con for:</p>";
        for ($i = 10; $i > 0; $i--) {
            echo "$i<br>";
        }
    ?>
</body>
</html>