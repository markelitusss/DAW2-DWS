<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <?php 
        $num = 27;

        for ($i = 1; $i <= 50; $i++) {
            if ($i == $num) {
                continue;
            }
            echo "$i ";
        }
    ?>
</body>
</html>