<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php 
        $edad = 20;

        if ($edad >= 18) {
            echo "<p>$edad años -> <u>mayor de edad</u></p>";
        }
        else {
            echo "<p>$edad años -> <u>menor de edad</u></p>";
        }
    ?>
</body>
</html>