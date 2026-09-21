<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <?php 
        $num1 = 7;
        $num2 = 3;
        $num3 = 26;

        // Encuentra el número más grande
        $biggest = 0;
        if ($num1 > $num2 && $num1 > $num3) {
            $biggest = $num1;
        }
        else if ($num2 > $num1 && $num2 > $num3) {
            $biggest = $num2;
        }
        else {
            $biggest = $num3;
        }

        // Encuentra el orden de los otros dos números
        if ($num1 == $biggest && $num2 > $num3) {
            echo "<p>Orden de manor a mayor: $num3, $num2, $num1</p>";
        }
        else if ($num1 == $biggest && $num3 > $num2) {
            echo "<p>Orden de manor a mayor: $num2, $num3, $num1</p>";
        }
        else if ($num2 == $biggest && $num1 > $num3) {
            echo "<p>Orden de manor a mayor: $num3, $num1, $num2</p>";
        }
        else if ($num2 == $biggest && $num3 > $num1) {
            echo "<p>Orden de manor a mayor: $num1, $num3, $num2</p>";
        }
        else if ($num3 == $biggest && $num1 > $num2) {
            echo "<p>Orden de manor a mayor: $num2, $num1, $num3</p>";
        }
        else {
            echo "<p>Orden de manor a mayor: $num1, $num2, $num3</p>";
        }
    ?>
</body>
</html>