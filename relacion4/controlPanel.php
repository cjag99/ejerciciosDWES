<?php
session_start();

// Si no hay usuario logueado debe volver al login
if (!isset($_SESSION['user'])) {
    header("Location: ./1-login.php");
    exit;
}

$user = $_SESSION['user']; // usuario logueado
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-success">Panel de control</h2>
            <p class="lead">Bienvenido, <strong><?php echo htmlspecialchars($user); ?></strong></p>

            <form method="get">
                <button name="logout" class="btn btn-danger">Cerrar sesión</button>
            </form>
        </div>
    </div>
</body>

</html>

<?php
// Procesa el cierre de sesión
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ./1-login.php"); //vuelve al login después de cerrar sesión
    exit;
}
?>