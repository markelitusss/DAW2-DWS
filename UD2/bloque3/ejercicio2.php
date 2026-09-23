<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php 
        // rellenamos el array
        $historial = array();
        array_push($historial, "Inicio");
        array_push($historial, "Productos");
        array_push($historial, "Carrito");
        array_push($historial, "Pago");

        // lo mostramos en la tabla
        echo "<p>Historial original</p><table><tr>";
        foreach ($historial as $pagina) {
            echo "<td>$pagina</td>";
        }
        echo "</tr></table>";

        // modificamos
        array_pop($historial);

        // lo mostramos en otra tabla
        echo "<p>Nuevo historial</p><table>";
        foreach ($historial as $pagina) {
            echo "<tr><td>$pagina</td></tr>";
        }
    ?>
</body>
</html>