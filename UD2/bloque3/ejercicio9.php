<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <?php
        $personas = array(
            [
                "nombre" => "Elena",
                "altura" => 166,
                "email" => "elena82@example.com"
            ],
            [
                "nombre" => "Julia",
                "altura" => 159,
                "email" => "julia170@example.com"
            ],
            [
                "nombre" => "Juan",
                "altura" => 185,
                "email" => "juann11@example.com"
            ],
            [
                "nombre" => "Roberto",
                "altura" => 178,
                "email" => "rober80@example.com"
            ],
            [
                "nombre" => "Nerea",
                "altura" => 169,
                "email" => "neree665@example.com"
            ]
        );

        // generamos la tabla HTML
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";

        foreach ($personas as $persona) {
            
            echo "<tr>";

            foreach ($persona as $atributo => $valor) {
                echo "<td>$valor</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html>