<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="container">
        <form action="process.php" method="post">
            <h2>Registro Usuario</h2>
            <div class="campo">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre" placeholder="Tu nombre completo" required>
            </div>
            <div class="campo">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="tu@correo.com" required>
            </div>
            <div class="campo">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="3001234567" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
