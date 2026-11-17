<?php
declare(strict_types=1);

const ARCHIVO_USUARIOS = __DIR__ . '/../datos/usuarios.json';
function obtenerUsuarios(): array {
    if (!is_file(ARCHIVO_USUARIOS)) {
        return [];
    }
    $usuarios = json_decode((string) file_get_contents(ARCHIVO_USUARIOS), true);
    return is_array($usuarios) ? $usuarios : [];
}

function guardarUsuarios(array $usuarios): void {
    file_put_contents(
    ARCHIVO_USUARIOS,
    json_encode($usuarios, JSON_PRETTY_PRINT |
    JSON_UNESCAPED_UNICODE),
    LOCK_EX 
    );
}

function buscarUsuarioPorEmail(string $email): ?array {
    trim(mb_strtolower($email));
    foreach (obtenerUsuarios() as $usuario) {
        if ($usuario["email"] === $email) {
            return $usuario;
        }
    }

    return null;
}

function crearUsuario(string $nombre, string $email, string $password): array {
    if (empty(obtenerUsuarios())) {
        $id = 1;
    }
    else {
        $id = max(array_column(obtenerUsuarios(), "id")) + 1;
    }

    $usuario = [
        "id" => $id,
        "nombre" => $nombre,
        "email" => mb_strtolower($email),
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "creado" => time()
    ];

    guardarUsuarios($usuario);
    return $usuario;
}

function validarRegistro(string $nombre, string $email, string $password, string $password2): array {
    $errores = [];
    if (mb_strlen(trim($nombre)) < 2 || mb_strlen(trim($nombre)) > 50) {
        array_push($errores, "El nombre debe tener entre 2 y 50 caracteres");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        array_push($errores, "Escribe un email válido");
    }
    if (!is_null(buscarUsuarioPorEmail($email))) {
        array_push($errores, "Ya existe una cuenta con ese email");
    }
    if (mb_strlen($password) < 8) {
        array_push($errores, "La contraseña debe tener al menos 8 caracteres");
    }
    if (mb_strlen($password) > 72) {
        array_push($errores, "La contraseña no puede superar los 72 caracteres");
    }
    if (!preg_match("/[a-zA-Z0-9]/", $password)) {
        array_push($errores, "La contraseña debe tener al menos una letra y un número");
    }
    if ($password !== $password2) {
        array_push($errores, "Las contraseñas no coinciden");
    }

    return $errores;
}

// funciona si se cambia isset por !isset
assert(validarRegistro('Ana', 'ana@test.es', 'secreto123', 'secreto123') === []);
assert(!isset(validarRegistro('A', 'ana@test.es', 'secreto123',
'secreto123')['nombre']));
assert(!isset(validarRegistro('Ana', 'ana@', 'secreto123',
'secreto123')['email']));
assert(!isset(validarRegistro('Ana', 'ana@test.es', 'corta1',
'corta1')['password']));
assert(!isset(validarRegistro('Ana', 'ana@test.es', 'sololetras',
'sololetras')['password']));
assert(!isset(validarRegistro('Ana', 'ana@test.es', 'secreto123',
'secreto124')['password2']));

?>