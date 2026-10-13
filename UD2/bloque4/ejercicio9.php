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
        // utiliza el Algoritmo de Euclides
        // el mcd de 252 y 105 es igual al mcd de 252 - 105 y 105
        function mcd($a, $b) {
            if ($a == $b) {
                return $a;
            }
            else if ($a > $b) {
                return mcd($a - $b, $b);
            }
            else {
                return mcd($a, $b - $a);
            }
        }

        echo "MCD de  252 y 105: ".mcd(252, 105);
    ?> 
</body>
</html>