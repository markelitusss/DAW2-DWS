<?php
  declare(strict_types=1);
  $title = "Login";
  require_once("includes/inicio.php");
  require_once("includes/header.php");

  if (empty($_SESSION["csrf_token"])) {
    $_SESSION["csrf"] = bin2hex(random_bytes(32));
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim((string) ($_POST['email'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    $usuario = buscarUsuarioPorEmail($email);

    if ($usuario !== null && password_verify($password, $usuario['password'])) {
      iniciarSesion($usuario);
      guardarMensaje('success', 'Bienvenido/a, ' . $usuario['nombre'] . '.');
      header('Location: catalogo.php');
      exit;
    }

    $error = 'Email o contraseña incorrectos.';
  }

?>
<main class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-5 col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          <h2 class="h4 mb-4 text-center">Iniciar sesión</h2>

          <!-- Error general (email/contraseña incorrectos o CSRF) -->
          <?php if (isset($error)) { ?>
          <div class="alert alert-danger"><?= $error ?></div>
          <?php } ?>

          <form method="POST" action="login.php">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION["csrf"]) ?>" />
            
            <!-- EMAIL -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                value=""
                autocomplete="email"
                required />
            </div>

            <!-- CONTRASEÑA -->
            <div class="mb-4">
              <label for="password" class="form-label">Contraseña</label>
              <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                autocomplete="current-password"
                required />
            </div>

            <button type="submit" class="btn btn-primary w-100">
              Entrar
            </button>
          </form>

          <hr />
          <p class="text-center text-muted small mb-0">
            ¿No tienes cuenta?
            <a href="registro.php">Regístrate gratis</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- 5.- Sección Footer-->
<?php
require_once("includes/footer.php");
?>