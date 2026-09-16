<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio 11</h1>
    
    <?php
        // dividimos por 365 días y por 12 años terrestres
        $dias_terrestres = 1150;
        $anyos_jupiter = $dias_terrestres / 365 / 12;

        // printf para redondear
        printf("%d dias terrestres equivalen a %.3f años jovianos", $dias_terrestres, $anyos_jupiter);
    ?>
</body>
</html>