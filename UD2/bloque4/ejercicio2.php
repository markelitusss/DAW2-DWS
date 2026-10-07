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
        function cuenta_funciones($a, $b) {
            for ($i = $a; $i <= $b; $i++) {
                // si se ha alcanzado el valor de b ya no se imprime con coma
                if ($i == $b) {
                    echo $i;
                }
                else {
                    echo "$i, ";
                }
            }
        }

        cuenta_funciones(20, 30);
    ?>
</body>
</html>