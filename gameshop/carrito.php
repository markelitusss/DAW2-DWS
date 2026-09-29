<?php
$title = "Carrito";
require_once("includes/header.php");
?>
<main class="container my-4">

    <div class="text-center py-5">
        <div class="fs-1 mb-3">🛒</div>
        <h3>Carrito en construcción</h3>
        <p class="text-muted">Lo implementaremos en UD3 con $_SESSION.</p>


        <!-- Feedback didáctico:  -->
        <div class="alert alert-info d-inline-block mt-3">
            GET recibido: producto_id

        </div>

        <div class="mt-3">
            <a href="catalogo.html" class="btn btn-primary">← Volver al catálogo</a>
        </div>
    </div>
</main>
<!-- 5.- Sección Footer-->
<?php
require_once("includes/footer.php");
?>