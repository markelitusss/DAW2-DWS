<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Ejercicio 10</title>
    <style>
        * {
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <?php
        $cad = "aprendiendo php en el ies Torrevigía";

        // reemplaza php por PHP
        $cad2 = str_replace("php", "PHP", $cad);

        // imprime el boton con popover
        echo '<a id="miBotonPopover" tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Hola!" data-bs-content="'.$cad2.'">Click aquí</a>';

        // a mayúsculas
        $cadMayus = strtoupper($cad2);
        echo "<h2>$cadMayus</h2>";

        // a minúsculas
        $cadMinus = strtolower($cad2);
        echo "<h3>$cadMinus</h3>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const popoverTriggerEl = document.getElementById('miBotonPopover');
        const popoverInstance = new bootstrap.Popover(popoverTriggerEl);
    </script>
</body>
</html>