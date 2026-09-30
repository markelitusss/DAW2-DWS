<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <style>
        .smallest {
            color: green;
        }

        .biggest {
            color: blue;
        }
    </style>
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

        // busca el número más grande y el más pequeño
        $biggest = 0;
        $smallest = 1000;
        $filaSmallest = 0;
        $columnaBiggest = 0;
        $filaCount = 0;
        $columnaCount = 0;

        foreach ($matriz as $fila) {

            $columnaCount = 0;

            foreach($fila as $celda) {
                if ($celda > $biggest) {
                    $biggest = $celda;
                    $columnaBiggest = $columnaCount;
                }
                
                if ($celda < $smallest) {
                    $smallest = $celda;
                    $filaSmallest = $filaCount;
                }

                $columnaCount++;
            }

            $filaCount++;
        }

        $filaCount = 0;
        $columnaCount = 0;

        // genera una tabla con la matriz
        // cuando encuentra la fila del número más pequeño o la columna del más grande
        // les añade una etiqueta class al elemento HTML
        echo "<table>";

        foreach ($matriz as $fila) {
            
            $columnaCount = 0;

            if ($filaCount == $filaSmallest) {
                echo '<tr class="smallest">';
            }
            else {
                echo "<tr>";
            }

            foreach ($fila as $celda) {
                if ($columnaCount == $columnaBiggest) {
                    echo '<td class="biggest">'.$celda.'</td>';
                }
                else {
                    echo "<td>$celda</td>";
                }
                
                $columnaCount++;
            }

            echo "</tr>";
            $filaCount++;
        }

        echo "</table>";
        
    ?>
</body>
</html>