<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <div class="container">
        <h1>Bienvenido, <?php session_start(); echo $_SESSION['usuario']['nombre']; ?>!</h1>
        <p>Has iniciado sesión correctamente.</p>
        <a href="../vista/index.php" class="button">Cerrar Sesión</a>
    </div>
    </center>
</body>
</html>
