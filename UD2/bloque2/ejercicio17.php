<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 17</h1>
    <?php 
        // for
        echo "<p>Bucle for:</p><table>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr><td>$i</td><td>".($i ** 2)."</td></tr>";
        }
        
        echo "</table>";

        // while
        echo "<p>Bucle while:</p><table>";
        $i = 1;
        while ($i <= 5) {
            echo "<tr><td>$i</td><td>".($i ** 2)."</td></tr>";
            $i++;
        }
        
        echo "</table>";

        // do while
        echo "<p>Bucle do-while:</p><table>";
        $i = 1;
        do {
            echo "<tr><td>$i</td><td>".($i ** 2)."</td></tr>";
            $i++;
        }
        while ($i <= 5);
        
        echo "</table>";
    ?>
</body>
</html>