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
        // funcion de suma
        function sumar_4() {
            $nums = array();
            // array para mostrar todos los mensajes con un solo bucle
            $orden = array("primer", "segundo", "tercer", "cuarto");
            $suma = 0;

            // bucle de la función
            // 1. asigna un valor aleatorio
            // 2. lo suma
            // 3. lo imprime
            for ($i = 0; $i < 4; $i++) {
                $nums[$i] = random_int(1, 20);
                $suma += $nums[$i];
                echo "El $orden[$i] valor enetro generado: $nums[$i]<br>";
            }

            echo "===========================<br>";
            // devuelve la suma final
            return $suma;
        }

        // función de multiplicación
        // lo mismo que la función de suma cambiando el nombre de las variables y el operador += por *=
        function multiplicar_4() {
            $nums = array();
            $orden = array("primer", "segundo", "tercer", "cuarto");
            $multiplicacion = 1;

            for ($i = 0; $i < 4; $i++) {
                $nums[$i] = random_int(1, 20);
                $multiplicacion *= $nums[$i];
                echo "El $orden[$i] valor enetro generado: $nums[$i]<br>";
            }

            echo "===========================<br>";
            return $multiplicacion;
        }

        $sum = sumar_4();

        echo "Suma de valores = $sum<br><br>";

        $mult = multiplicar_4();

        echo "Producto de valores = $mult<br><br>";
    ?>
</body>
</html>