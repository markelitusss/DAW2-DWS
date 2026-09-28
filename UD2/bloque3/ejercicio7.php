<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <?php

        // define el array
        $arr = array();
        for ($i = 0; $i < 100; $i++)  {
            if (random_int(1, 2) == 1) {
                $arr[$i] = "M";
            }
            else {
                $arr[$i] = "F";
            }
        }

        // se recorre el array para contar M y F
        $arrAsoc = [
            "M" => 0,
            "F" => 0
        ];
        foreach ($arr as $letra) {
            if ($letra == "M") {
                $arrAsoc["M"]++;
            }
            else {
                $arrAsoc["F"]++;
            }
        }

        // se imprime el array
        echo "M -> ".$arrAsoc["M"]." F -> ".$arrAsoc["F"];
    ?>
</body>
</html>