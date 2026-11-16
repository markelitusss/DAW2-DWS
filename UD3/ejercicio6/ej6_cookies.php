<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>
<body>
    <?php if (!isset($_COOKIE["nombreusuario"]) || !isset($_COOKIE["idioma"])) {?>
    <main class="container">
        <p class="mt-3 mb-3">Bienvenido,</p>
        <h1 class="mb-3">Preferencias</h1>
        <form action="ej6_guarda_pref.php" method="post">
            <div class="mb-3">
                <label for="nombreusuario" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" name="nombreusuario" required>
            </div>
            <div class="mb-3">
                <label for="idioma" class="form-label me-3">Idioma:</label>
                <input type="radio" name="idioma" value="es">
                <label for="idioma" class="form-label me-2">Español</label>
                <input type="radio" name="idioma" value="en">
                <label for="idioma" class="form-label">English</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    <?php } 
        else if ($_COOKIE["idioma"] === "es") { ?>
        <main class="container">
            <p class="mt-3 mb-3">Bienvenido de nuevo, <?= htmlspecialchars($_COOKIE["nombreusuario"]) ?></p>
            <h1 class="mb-3">Preferencias</h1>
            <form action="ej6_guarda_pref.php" method="post">
                <div class="mb-3">
                    <label for="nombreusuario" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="nombreusuario" required>
                </div>
                <div class="mb-3">
                    <label for="idioma" class="form-label me-3">Idioma:</label>
                    <input type="radio" name="idioma" value="es">
                    <label for="idioma" class="form-label me-2">Español</label>
                    <input type="radio" name="idioma" value="en">
                    <label for="idioma" class="form-label">English</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </main>
    <?php } else { ?>
        <main class="container">
            <p class="mt-3 mb-3">Welcome back, <?= htmlspecialchars($_COOKIE["nombreusuario"]) ?></p>
            <h1 class="mb-3">Preferences</h1>
            <form action="ej6_guarda_pref.php" method="post">
                <div class="mb-3">
                    <label for="nombreusuario" class="form-label">Username</label>
                    <input type="text" class="form-control" name="nombreusuario" required>
                </div>
                <div class="mb-3">
                    <label for="idioma" class="form-label me-3">Language:</label>
                    <input type="radio" name="idioma" value="es">
                    <label for="idioma" class="form-label me-2">Español</label>
                    <input type="radio" name="idioma" value="en">
                    <label for="idioma" class="form-label">English</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </main>
    <?php }
    ?>
</body>
</html>