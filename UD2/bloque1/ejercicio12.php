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
        // 6 onzas = 1 copa
        $onzas = 18;
        $copas = $onzas / 6;

        // redondeo con printf
        printf("%d onzas equivalen a %.2f copas", $onzas, $copas);
    ?>
</body>
</html>