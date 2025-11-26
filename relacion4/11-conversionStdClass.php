<?php
include "./stdClass.php";

// Función para pintar cualquier estructura como tabla Bootstrap
function pintarTabla($datos) {
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead class='table-dark'><tr><th>Clave</th><th>Valor</th></tr></thead><tbody>";

    foreach ($datos as $clave => $valor) {
        echo "<tr><td><strong>$clave</strong></td><td>$valor</td></tr>";
    }

    echo "</tbody></table>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión Objeto / Array</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container py-4">
    <h1 class="mb-4 text-center">Conversión entre Objeto y Array en PHP</h1>

    <!-- OBJETO ORIGINAL -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
            Objeto original (stdClass)
        </div>
        <div class="card-body">
            <?php pintarTabla($moduloDWES); ?>
        </div>
    </div>

    <!-- ARRAY -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white">
            Conversión a array
        </div>
        <div class="card-body">
            <?php pintarTabla($arrayDWES); ?>
        </div>
    </div>

    <!-- OBJETO RECONVERTIDO -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-warning text-dark">
            Conversión inversa: array → objeto
        </div>
        <div class="card-body">
            <?php pintarTabla($nuevoModuloDWES); ?>
        </div>
    </div>

</div>

</body>
</html>
