<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <?php
        // genera array
        $frutas = array("Manzana", "Pera", "Naranja", "Limón", "Mango");
        
        // inicio lista
        echo "<ul>";
        
        // imprime cada elemento del array en la lista
        foreach ($frutas as $fruta) {
            echo "<li>$fruta</li>";
        }

        // fin lista
        echo "</ul>";
    ?>
</body>
</html>