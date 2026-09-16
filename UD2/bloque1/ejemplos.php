<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>
</head>
<body>
    <h1>Ejemplos</h1>
    <?php
        $num = 4;
        print "<h2>El valor de num es ".$num."</h2>";
        print "<h3>El valor de num es $num</h3>";

        // comentario

        $nombre = "Juan";
        $edad = 25;
        printf("<strong>Mi nombre es %s y tengo %d años</strong>", $nombre, $edad);

        $importe = 98.95;
        printf("<p>El importe es %5f</p>", $importe);
        echo "<p>El importe es $importe</p>";

        $textoEdad = "dieciocho";
        $edad = intval($textoEdad);
        echo "<p>Edad: $edad</p>";

        $num = "";
        echo empty($num);

        
    ?>

    <!--Comentario HTML-->
</body>
</html>