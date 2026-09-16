<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    
    <?php
        $car = "/";

        // usamos la concatenación de variables
        // para los espacios usamos el caracter de HTML &nbsp (non-breaking space) 
        echo $car.$car.$car.$car.$car.$car.$car.$car.$car.$car;
        echo "<br>".$car.$car."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$car.$car;
        echo "<br>".$car.$car.$car.$car.$car.$car.$car.$car.$car.$car;
    ?>
</body>
</html>