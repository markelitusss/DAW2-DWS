<?php
    declare(strict_types=1);
    require_once 'includes/inicio.php';

    $errores = [];
    $datos = ['nombre' => '', 'email' => ''];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $datos['nombre'] = trim((string) ($_POST['nombre'] ?? ''));
        $datos['email'] = trim((string) ($_POST['email'] ?? ''));
        $password = (string) ($_POST['password'] ?? '');
        $password2 = (string) ($_POST['password2'] ?? '');

        $errores = validarRegistro($datos['nombre'], $datos['email'], $password, $password2);

        if (empty($errores)) {
          crearUsuario($datos["nombre"], $datos["email"], $password);
          guardarMensaje("success", "Usuario registrado con éxito");
          
          header("Location: login.php");
          exit;
        }

    }

$title = "Crear cuenta";
require_once("includes/header.php");

?>

<main class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-5 col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          <h2 class="h4 mb-4 text-center">Registro</h2>

          <!-- Error general (email/contraseña incorrectos o CSRF) -->

          <div class="alert alert-danger">email incorrecto</div>

          <form method="POST" action="myform.php" novalidate>
            <input type="hidden" name="csrf_token" value="" />
            
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input 
                type="text" 
                class="form-control" 
                id="nombre" 
                name="nombre" 
                autofocus 
                required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                autocomplete="email"
                required />
            </div>

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

            <div class="mb-4">
              <label for="password2" class="form-label">Repite contraseña</label>
              <input
                type="password"
                id="password2"
                name="password2"
                class="form-control"
                autocomplete="current-password"
                required />
            </div>

            <button type="submit" class="btn btn-primary w-100">
              Entrar
            </button>
          </form>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
require_once("includes/footer.php");
?>