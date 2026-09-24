<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php
        // inicio tabla 
        echo "<table><tr>";
        
        // genera el array
        $num = array();
        $suma_total = 0;
        for ($i = 0; $i < 5; $i++) {
            $num[$i] = random_int(1, 100);
        }

        // recorre el array al revés
        for ($i = 4; $i >= 0; $i--) {
            echo "<td>$num[$i]</td>";
            $suma_total += $num[$i];
        }

        // fin tabla
        echo "</tr></table>";

        // muestra la suma de los elementos del array
        echo "<p>Suma total: $suma_total";
    ?>
</body>
</html>