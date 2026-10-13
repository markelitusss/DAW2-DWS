<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <?php 
        // variables globales
        $rev = 0;
        $pos = 1;

        function invertir($x) {
            global $rev;
            global $pos;

            if ($x > 1) {
                invertir((int) $x / 10);
                // le añadimos el último dígito
                $rev += ($x % 10) * $pos;
                $pos *= 10;
            }

            return $rev;
        }

        echo "12345 invertido: ".invertir(12345);
    ?> 
</body>
</html>