<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio 11</h1>
    <?php 
        function suma_digitos($x) {
            if ($x < 10) {
                return [
                    'suma' => $x,
                    'texto' => (string) $x
                ];
            }

            $ultimoDigito = $x % 10;
            // división entera
            $resto = intdiv($x, 10);
            // con la división anterior volvemos a ejecutar la función
            $resultadoPrevio = suma_digitos($resto);

            // devolvemos la suma y el texto asociado
            return [
                'suma' => $resultadoPrevio['suma'] + $ultimoDigito,
                'texto' => $resultadoPrevio['texto'].' + '.$ultimoDigito
            ];
        }

        $resultado = suma_digitos(3433);
        
        echo $resultado['texto'].' = '.$resultado['suma'];
    ?>
</body>
</html>