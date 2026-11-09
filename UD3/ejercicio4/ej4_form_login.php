<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION["csrf"])) {
        $_SESSION["csrf"] = bin2hex(random_bytes(32));
    }

    if (isset($_SESSION["errores"])) {
        $errores = $_SESSION["errores"];
        unset($_SESSION["errores"]);
    }
    else {
        $errores = [];
    }

    if (isset($_SESSION["old_input"])) {
        $old = $_SESSION["old_input"];
        unset($_SESSION["old_input"]);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
</head>
<body>
    <main class="container">
        <?php if (!empty($errores)) { ?>
            <div class="alert alert-danger mt-3">
                <?php foreach ($errores as $error) { ?>
                    <p><?= $error ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <form action="ej4_result_login.php" method="POST">
            <input type="hidden" name="csrf" value="<?= htmlspecialchars($_SESSION['csrf']) ?>">
            <div class="mt-3 mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    aria-describedby="emailHelpId"
                    placeholder="Email"
                    value="<?= isset($old) ? htmlspecialchars($old) : "" ?>"
                >
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label">Contraseña</label>
                <input
                    type="password"
                    class="form-control"
                    name="passwd"
                    id="passwd"
                    placeholder="Contraseña"
                >
            </div>
            <div class="d-flex mb-3">
                <div class="form-check flex-grow-1">
                    <input class="form-check-input" type="checkbox" value="rememberMe" id="rememberMe" />
                    <label class="form-check-label" for="rememberMe">Recuérdame</label>
                </div>
                <u class="">Olvidaste Contraseña?</u>
            </div>
            <button type="submit" class="btn btn-primary w-25">
                Login
            </button>
        </form>
        <p class="mt-3">¿Todavía no tienes una cuenta? <a href="#">Regístrate</a></p>
    </main>
</body>
</html>