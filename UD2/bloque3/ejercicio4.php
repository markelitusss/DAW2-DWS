<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <?php
        // variables
        $biggest = 0; 
        $smallest = 101;
        $suma_media = 0;

        // genera el array
        $num2 = array();
        for ($i = 0; $i < 30; $i++) {
            $num2[$i] = random_int(0, 100);

            // comprueba si el último número generado es más grande que los anteriores
            if ($num2[$i] > $biggest) {
                $biggest = $num2[$i];
            }

            // lo mismo pero para el número más pequeño
            else if ($num2[$i] < $smallest) {
                $smallest = $num2[$i];
            }

            $suma_media += $num2[$i];
        }

        // imprime el resultado
        // se calcula la media y se redondea con round() a 2 decimales
        echo "<h1> Número más grande: $biggest <br>Número más pequeño: $smallest <br> Media: ".round(($suma_media / 30), 2)."</h1>";
    ?>
</body>
</html>