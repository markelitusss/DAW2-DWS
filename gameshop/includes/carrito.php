<?php 
    declare(strict_types=1);
    require_once("config.php");

    function obtenerCarrito(): array {
        return $_SESSION["carrito"];
    }

    function agregarAlCarrito(array $producto, int $cantidad): int {
        if (!isset($_SESSION["carrito"][$producto["id"]])) {
            $_SESSION["carrito"][$producto["id"]] = 0;
        }

        if ($cantidad + $_SESSION["carrito"][$producto["id"]] < MAX_POR_PRODUCTO && $cantidad + $_SESSION["carrito"][$producto["id"]] <= $producto["stock"]) {
            $_SESSION["carrito"][$producto["id"]] += $cantidad;
            $producto["stock"] -= $cantidad;
        }
        else if ($cantidad + $_SESSION["carrito"][$producto["id"]] < MAX_POR_PRODUCTO && $cantidad + $_SESSION["carrito"][$producto["id"]] > $producto["stock"]) {
            $_SESSION["carrito"][$producto["id"]] = $producto["stock"];
            $producto["stock"] = 0;
        }
        else {
            $_SESSION["carrito"][$producto["id"]] = 10;
            $producto["stock"] -= 10 - $cantidad;
        }

        return $_SESSION["carrito"][$producto["id"]];
    }

    $_SESSION['carrito'] = [];
    $p = ['id' => 99, 'stock' => 2];
    assert(agregarAlCarrito($p, 1) === 1);
    assert(agregarAlCarrito($p, 1) === 2); // ya estaba: acumula
    assert(agregarAlCarrito($p, 5) === 2); // no pasa del stock
    $p = ['id' => 98, 'stock' => 50];
    assert(agregarAlCarrito($p, 8) === 8);
    assert(agregarAlCarrito($p, 8) === 10); // no pasa de MAX_POR_PRODUCTO
    $_SESSION['carrito'] = [];
?>