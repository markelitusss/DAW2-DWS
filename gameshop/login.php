<?php
  $title = "Login";
  require_once("includes/header.php");

  if (empty($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
  }
?>
<main class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-5 col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          <h2 class="h4 mb-4 text-center">Iniciar sesión</h2>

          <!-- Error general (email/contraseña incorrectos o CSRF) -->

          <div class="alert alert-danger">email incorrecto</div>

          <form method="POST" action="myform.php" novalidate>
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION["csrf_token"]) ?>" />
            
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" ariadescribedby="nombreHelp" name="nombre" autofocus required>
            </div>
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
            <a href="registro.html">Regístrate gratis</a>
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