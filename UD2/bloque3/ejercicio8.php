<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <?php
        // Matriz y array necesario para almacenar los números ya generados
        $matriz = array(
            array(), array(), array(), array(), array(), array()
        );
        $nums = array();
        $nums_count = 0;

        // Genera una matriz donde no se repite ningún número
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $matriz[$i][$j] = random_int(100, 999);
                $nums[$nums_count] = $matriz[$i][$j];
                $ok = 0;

                while ($ok != 1) {
                    $repeticiones = 0;
                    foreach ($nums as $num) {
                        if ($matriz[$i][$j] == $num) {
                            $repeticiones++;
                        }

                        if ($repeticiones > 1) {
                            $matriz[$i][$j] = random_int(100, 999);
                            $nums[$nums_count] = $matriz[$i][$j];
                            break;
                        }
                    }
                    if ($repeticiones < 2) {
                        $ok = 1;
                    }
                }
                
                $nums_count++;
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

        
    ?>
</body>
</html>