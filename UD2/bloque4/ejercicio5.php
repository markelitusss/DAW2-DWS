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
        function potencia($base, $exp = 2) {
            return $base ** $exp;
        }

        echo potencia(4, 3)."<br>"; // 64
        echo potencia(10); // el exp. default es 2 -> 10^2 = 100
    ?> 
</body>
</html>