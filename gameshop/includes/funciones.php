<?php 
    declare(strict_types=1);

    function precio_formateado(float $precio) {
        return number_format($precio, 2, ",", '.')." €";
    }

    function badge_plataforma(string $plataforma) {
        $badge = match ($plataforma) {
            "Switch" => "text-bg-danger",
            "PS5" => "text-bg-primary",
            "Xbox" => "text-bg-success",
            "PC" => "text-bg-secondary",
            "Movil" => "text-bg-info"
        };

        return $badge;
    }

    function obtenerDestacados(array $productos) {
        $productosDestacados = array();

        foreach ($productos as $producto) {
            if ($producto["destacado"]) {
                array_push($productosDestacados, $producto);
            }
        }

        return $productosDestacados;
    }

    function estadoStock(int $stock) {
        if ($stock == 0) {
            $estadoStock = "Agotado";
        }
        else if ($stock > 0 && $stock < 4) {
            $estadoStock = "Últimas unidades";
        }
        else if ($stock > 3) {
            $estadoStock = "Disponible";
        }
        else {
            $estadoStock = "Error: stock negativo";
        }

        return $estadoStock;
    }

    function generarSlug(string $titulo) {
        $titulo = trim($titulo);
        $slug = str_replace(array(' ', '\'', '"', ',',':', ';', '<', '>', '&', '$', '!', '¡', '?', '¿'), '-', mb_strtolower($titulo));
        $finalSlug = preg_replace('/-+/', '-', $slug);
        $finalSlug = trim($finalSlug, '-');

        return $finalSlug;
    }

    function valorInventario(array $productos) {
        $suma = 0;

        foreach ($productos as $producto) {
            $suma += ($producto["precio"] - ($producto["precio"] * $producto["descuento"] / 100)) * $producto["stock"];
        }

        return $suma;
    }

?>