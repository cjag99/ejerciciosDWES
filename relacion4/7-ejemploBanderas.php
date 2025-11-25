<?php
require_once "./Bandera.php";
// Crear varios objetos Bandera
$bandera1 = new Bandera(Orientacion::HORIZONTAL, ["Rojo", "Amarillo", "Rojo"], "España");
$bandera2 = new Bandera(Orientacion::HORIZONTAL, ["Rojo", "Amarillo", "Rojo"], "España copia");
$bandera3 = new Bandera(Orientacion::VERTICAL, ["Rojo", "Amarillo", "Rojo"]);

// Comparaciones
$mensaje1 = $bandera1->compareBandera($bandera2) ? "Bandera 1 y 2 son iguales" : "Bandera 1 y 2 no son iguales";
$mensaje2 = $bandera1->compareColores($bandera3) ? "Bandera 1 y 3 tienen mismos colores pero distinta orientación" : "Bandera 1 y 3 no cumplen esa condición";

// Invertir colores y orientación
$bandera1->reverseColores();
$bandera1->reverseOrientacion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Bandera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container">
    <h1 class="mb-4 text-center">Ejemplo de Uso de la Clase Bandera</h1>

    <div class="card mb-3 shadow">
        <div class="card-body">
            <h5 class="card-title">Bandera 1</h5>
            <p class="card-text"><?php echo $bandera1; ?></p>
        </div>
    </div>

    <div class="card mb-3 shadow">
        <div class="card-body">
            <h5 class="card-title">Bandera 2</h5>
            <p class="card-text"><?php echo $bandera2; ?></p>
        </div>
    </div>

    <div class="card mb-3 shadow">
        <div class="card-body">
            <h5 class="card-title">Bandera 3</h5>
            <p class="card-text"><?php echo $bandera3; ?></p>
        </div>
    </div>

    <div class="alert alert-info mt-4">
        <?php echo $mensaje1; ?>
    </div>

    <div class="alert alert-warning">
        <?php echo $mensaje2; ?>
    </div>

    <div class="alert alert-success mt-4">
        Colores y orientación de la Bandera 1 invertidos correctamente.
    </div>
</div>

</body>
</html>
