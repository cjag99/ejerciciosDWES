<?php
require_once "./Encendible.php";
require_once "./Bombilla.php";
require_once "./Motocicleta.php";

function enciende_algo(Encendible $algo) {
    return $algo->encender();
}

$miBombilla = new Bombilla(TipoBombilla::LED, 12);
$miMoto = new Motocicleta("1234-ABC");
try{
    enciende_algo($miBombilla);
    $resultadoBombilla = "Bombilla encendida correctamente.";

} catch (Exception $e) {
    $resultadoBombilla = "Error al encender la bombilla: " . $e->getMessage();
}
try{
    enciende_algo($miMoto);
} catch (Exception $e) {
    $resultadoMoto = "Error al encender la motocicleta: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encendible Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <h1 class="text-center mb-4">Demostración del Polimorfismo Encendible</h1>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Mostrando la bombilla:</h5>
                    <p class="card-text"><?php echo $miBombilla; ?></p>
                    <div class="alert alert-success mt-3">
                        <?php echo $resultadoBombilla; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Mostrando la motocicleta:</h5>
                    <p class="card-text"><?php echo $miMoto; ?></p>
                    <div class="alert alert-info mt-3">
                        <?php echo $resultadoMoto; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
