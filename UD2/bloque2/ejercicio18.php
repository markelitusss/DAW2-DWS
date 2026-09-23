<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table td {
            border: 2px solid black;
            padding: 10px;
            font-size: 16px;
        }

        td:first-child {
            background-color: orange;
            color: white;
            font-weight: bold;
        }
        
        tr:first-child, #first {
            background-color: blue;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 18</h1>
    <?php 
        // inicio tabla
        echo "<table>";

        // bucle exterior: genera las filas de la tabla
        // bucle interior: genera las columnas de la tabla
        for ($i = -1; $i < 11; $i++) {
            echo "<tr>";
            for ($j = -1; $j < 11; $j++) {
                // si ambos valores son -1 se imprime una x en la primera casilla
                if ($i == -1 && $j == -1) {
                    echo "<td id=\"first\">x</td>";
                }
                // si la i es -1 (primera fila) se imprimen los valores de j
                else if ($i == -1) {
                    echo "<td>$j</td>";
                }
                // si la j es -1 (primera columna) se imprimen los valores de i
                else if ($j == -1) {
                    echo "<td>$i</td>";
                }
                // si ambos son valores normales (0-10) se multiplican
                else {
                    echo "<td>".($i * $j)."</td>";
                }
            }

            // fin fila
            echo "</tr>";
        }

        // fin tabla
        echo "</table>";
    ?>
</body>
</html>