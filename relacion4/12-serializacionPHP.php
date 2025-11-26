<?php
include './stdClass.php';

// SERIALIZACIONES
$serialObjeto = serialize($moduloDWES);
$serialArray = serialize($arrayDWES);

// DESERIALIZACIONES
$restauradoObjeto = unserialize($serialObjeto);
$restauradoArray = unserialize($serialArray);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12 - Serialize / Unserialize</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container py-4">
    <h1 class="text-center mb-4">Ejercicio 12 – Serialize y Unserialize</h1>

    <!-- SERIALIZAR OBJETO -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
            1. Serialización del Objeto
        </div>
        <div class="card-body">
            <pre class="bg-dark text-white p-3 rounded"><?php echo $serialObjeto; ?></pre>
        </div>
    </div>

    <!-- SERIALIZAR ARRAY -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white">
            2. Serialización del Array
        </div>
        <div class="card-body">
            <pre class="bg-dark text-white p-3 rounded"><?php echo $serialArray; ?></pre>
        </div>
    </div>

    <!-- UNSERIALIZE OBJETO -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-warning text-dark">
            3. Unserialize del Objeto
        </div>
        <div class="card-body">
            <pre class="bg-dark text-white p-3 rounded"><?php print_r($restauradoObjeto); ?></pre>
        </div>
    </div>

    <!-- UNSERIALIZE ARRAY -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-danger text-white">
            4. Unserialize del Array
        </div>
        <div class="card-body">
            <pre class="bg-dark text-white p-3 rounded"><?php print_r($restauradoArray); ?></pre>
        </div>
    </div>

</div>

</body>
</html>
