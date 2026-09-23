<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Ejercicio 15</h1>
    <?php 

        // bucle exterior: primer factor de la multiplicación
        // bucle interior: segundo factor
        for ($i = 1; $i < 11; $i++) {
            
            // para añadir separaciones
            echo "Tabla del $i<br>";
            echo "************<br>";

            for ($j = 1; $j < 11; $j++) {
                echo "$i x $j = ".($i * $j)."<br>";    
            }

            echo "<br>";
        }
    ?>
</body>
</html>