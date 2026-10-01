<?php 
    function precio_formateado($precio) {
        return number_format($precio, 2, ",");
    }

    function badge_plataforma($plataforma) {
        $badge = match ($plataforma) {
            "Switch" => "text-bg-danger",
            "PS5" => "text-bg-primary",
            "Xbox" => "text-bg-success",
            "PC" => "text-bg-secondary",
            "Movil" => "text-bg-info"
        };

        return $badge;
    }
?>