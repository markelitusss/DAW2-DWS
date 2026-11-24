<?php
    declare(strict_types=1);
    require_once 'includes/inicio.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      $_SESSION["csrf"] = bin2hex(random_bytes(32));
    }

    $errores = [];
    $datos = ['nombre' => '', 'email' => ''];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_SESSION["csrf"]) && !isset($_POST["csrf"]) && $_SESSION["csrf"] !== $_POST["csrf"]) {
          header("Location: registro.php");
          exit;
        }

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

          <form method="POST" action="registro.php">
            <input type="hidden" name="csrf" value="<?= $_SESSION["csrf"] ?>" />
            
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input 
                type="text" 
                class="form-control <?= isset($errores)?>" 
                id="nombre" 
                name="nombre"
                value="<?= isset($datos["nombre"]) ? htmlspecialchars($datos["nombre"]) : "" ?>" 
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
                autocomplete="new-password"
                value="<?= isset($datos["email"]) ? htmlspecialchars($datos["email"]) : "" ?>"
                required />
            </div>

            <div class="mb-4">
              <label for="password" class="form-label">Contraseña</label>
              <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                autocomplete="new-password"
                required />
            </div>

            <div class="mb-4">
              <label for="password2" class="form-label">Repite contraseña</label>
              <input
                type="password"
                id="password2"
                name="password2"
                class="form-control"
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