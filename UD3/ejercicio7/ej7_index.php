<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>
<?php if (isset($_COOKIE["nombreusu"], $_COOKIE["colorusu"])) {?>
<body style="background-color: <?= htmlspecialchars($_COOKIE["colorusu"]) ?>;">
      <main class="container">
            <h1>Bienvenido, <?= htmlspecialchars($_COOKIE["nombreusu"]) ?></h1>
            <a href="ej7_preferencias.php" class="btn btn-secondary">Volver al formulario</a>
            <a href="ej7_borrar_prefs.php" class="btn btn-secondary">Borrar preferencias</a>
      </main>
</body>
<?php }
else {?>
<body>
      <main class="container">
            <p>Página de inicio</p>
            <a href="ej7_preferencias.php" class="btn btn-secondary">Volver al formulario</a>
      </main>
</body>
<?php } ?>
</html>