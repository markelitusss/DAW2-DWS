<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Ejercicio 16</h1>
    <?php 
        $logueado = true;

        if ($logueado) {
            echo "<h1>Bienvenido de nuevo</h1><p>Este contenido es para usuarios registrados</p>";
        }
        else {
            echo "<h1>Por favor, inicia sesión</h1><p>Crea una cuenta, o ingresa para acceder a más contenido</p>";
        }
    ?>
</body>
</html>