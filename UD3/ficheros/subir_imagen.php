<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $tipos = ["image/jpeg", "image/png"];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_FILES["image"]["tmp_name"])) {
            $tipo = mime_content_type($_FILES["image"]["tmp_name"]);
            if (!in_array($tipo, $tipos)) {
                $error = "El tipo de archivo subido no está permitido";
            }
            else {
                $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                $nombre = bin2hex(random_bytes(8)) . "." .$extension;
                $ruta = "img/" . $nombre;

                $mover_imagen = move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
            
                if (!$mover_imagen) {
                    $error = "Error al subir la imagen";
                    header("Location: form_imagen.php");
                    exit;
                }
            } 
        }
        else {
            $error = "Error: No se ha subido ningún archivo";
        }

        if (isset($_POST["titulo"]) && !empty($_POST["titulo"])) {
            $titulo = htmlspecialchars($_POST["titulo"]);
        }

        if (isset($error)) {
            $_SESSION["error"] = $error;
            $_SESSION["old_input"] = $_POST["titulo"];
            header("Location: form_imagen.php");
            exit;
        }
        else {
            if (isset($_SESSION["error"])) {
                unset($_SESSION["error"]);
            }
        }
    }
    else {
        header("Location: form_imagen.php");
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Resultado</title>
</head>
<body>
    <main class="container">
        <div class="alert alert-success mt-4">
            <p>La imagen ha sido subida correctamente</p>
        </div>
        <p>Título de la imagen: <?= $titulo ?></p>
        <img src="<?=$ruta?>" alt="Imagen subida">
    </main>
    
</body>
</html>

