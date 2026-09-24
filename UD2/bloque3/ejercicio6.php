<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <?php

        // define la matriz
        $matriz = array(
            array(), array(), array(), array(), array(),
            array(), array(), array(), array(), array()
            );

        $posicion_biggest = array(0, 0);

        // rellena la matriz mientras busca el número más grande
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $matriz[$i][$j] = random_int(1, 50);

                // se busca un número más grande y con posicion diferente a la que ya hay almacenada en posicion_biggest[]
                if ($matriz[$i][$j] > $matriz[$posicion_biggest[0]][$posicion_biggest[1]]) {
                    $posicion_biggest[0] = $i;
                    $posicion_biggest[1] = $j;
                }
            }
        }

        // genera una tabla con la matriz
        echo "<table>";

        foreach ($matriz as $fila) {
            
            echo "<tr>";

            foreach ($fila as $celda) {
                echo "<td>$celda</td>";
            }

            echo "</tr>";
        }

        echo "</table>";

        // imprime el resultado
        // primero eje x y luego eje y
        echo "<p>Posición del número más grande de la matriz: $posicion_biggest[1], $posicion_biggest[0]";
        echo "</p>(0, 0 es la esquina superior izquierda)";
    ?>  
</body>
</html>