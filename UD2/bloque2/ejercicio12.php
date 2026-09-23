<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Ejercicio 12</h1>
    <?php 
        $num = 27;

        for ($i = 1; $i <= 50; $i++) {
            echo "A";
            if ($i == $num) {
                break;
            }
        }
    ?>
</body>
</html>