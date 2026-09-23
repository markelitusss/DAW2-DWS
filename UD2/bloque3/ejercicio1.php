<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php 
        // rellenamos el array
        $compras = array();
        array_push($compras, "Leche");
        array_push($compras, "Pan");
        array_push($compras, "Huevos");

        // imprimimos el array original
        echo "<p>Array original:</p><ul>";
        foreach ($compras as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";

        // modificamos
        array_pop($compras);

        // imprimimos el array modificado
        echo "<p>Nuevo array:</p><ol>";
        foreach ($compras as $item) {
            echo "<li>$item</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>