<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php 
        function intercambia(int &$var1, int &$var2) {
            // intercambio de valores utilizando una variable temporal
            $temp = $var1;
            $var1 = $var2;
            $var2 = $temp;
        }

        $a = 5;
        $b = 7;
        intercambia($a, $b);

        echo "a = ".$a." ,b = ".$b; // a = 7, b = 5
    ?>
</body>
</html>