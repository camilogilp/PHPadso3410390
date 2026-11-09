<?php
$nombre = "";
$email = "";
$telefono = "";
$mensaje = "";
$esError = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = isset($_POST["txtNombre"]) ? trim($_POST["txtNombre"]) : "";
    $email = isset($_POST["txtEmail"]) ? trim($_POST["txtEmail"]) : "";
    $telefono = isset($_POST["txtTelefono"]) ? trim($_POST["txtTelefono"]) : "";

    $errores = [];

    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }

    if (empty($email)) {
        $errores[] = "El email es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no tiene un formato válido.";
    }

    if (empty($telefono)) {
        $errores[] = "El teléfono es obligatorio.";
    } elseif (!preg_match("/^\d{7,15}$/", $telefono)) {
        $errores[] = "El teléfono debe tener entre 7 y 15 dígitos.";
    }

    if (count($errores) > 0) {
        $mensaje = "⚠️ No se pudo registrar el formulario.";
        $esError = true;
    } else {
        $mensaje = "✅ Registro exitoso. Bienvenido, " . htmlspecialchars($nombre) . "!";
        $esError = false;
        // Aquí iría la lógica para guardar el dato en la base de datos.
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="container">
        <h2>Registro Usuario</h2>
        <?php if (!empty($mensaje)): ?>
            <p class="resultado <?= $esError ? 'error' : 'exito' ?>">
                <?= $mensaje ?>
            </p>
        <?php endif; ?>
        <a class="btn-volver" href="index.php">← Volver al formulario</a>
    </main>
</body>
</html>
