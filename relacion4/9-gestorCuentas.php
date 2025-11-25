<?php
// demo_cuentas.php
// DEMO to compare CuentaDebito and CuentaCredito using Bootstrap

require_once './CuentaBancaria.php';
require_once './CuentaDebito.php';
require_once './CuentaCredito.php';

// Helper to print messages with Bootstrap
function alert($msg, $type = 'primary') {
    echo "<div class='alert alert-$type' role='alert'>$msg</div>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Cuentas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
<div class="container py-4">
    <h1 class="mb-4">Demo de CuentaDébito y CuentaCrédito</h1>

    <?php
    // Create accounts
    $debito = new CuentaDebito("ES12-AAA", "Usuario Debito", 300);
    $credito = new CuentaCredito("ES34-BBB", "Usuario Credito", 200, 0, -500);

    echo "<h3>Estado inicial</h3>";
    alert("Cuenta Débito: saldo inicial = {$debito->getSaldo()}€", 'info');
    alert("Cuenta Crédito: saldo inicial = {$credito->getSaldo()}€ (límite: {$credito->getLimiteDescubierto()}€)", 'info');


    echo "<h3 class='mt-4'>Ingresos</h3>";
    try {
        $debito->ingresar(100);
        alert("Ingreso de 100€ en Cuenta Débito. Nuevo saldo: {$debito->getSaldo()}€", 'success');
    } catch (Exception $e) {
        alert("Error en ingreso débito: " . $e->getMessage(), 'danger');
    }

    try {
        $credito->ingresar(150);
        alert("Ingreso de 150€ en Cuenta Crédito. Nuevo saldo: {$credito->getSaldo()}€", 'success');
    } catch (Exception $e) {
        alert("Error en ingreso crédito: " . $e->getMessage(), 'danger');
    }


    echo "<h3 class='mt-4'>Extracciones</h3>";
    try {
        $debito->retirar(500); // likely fail
        alert("Extracción de 500€ en Cuenta Débito. Nuevo saldo: {$debito->getSaldo()}€", 'success');
    } catch (Exception $e) {
        alert("Error al extraer en débito: " . $e->getMessage(), 'danger');
    }

    try {
        $credito->retirar(600); // allows going below 0
        alert("Extracción de 600€ en Cuenta Crédito. Nuevo saldo: {$credito->getSaldo()}€", 'success');
    } catch (Exception $e) {
        alert("Error al extraer en crédito: " . $e->getMessage(), 'danger');
    }


    echo "<h3 class='mt-4'>Transferencias</h3>";
    try {
        $debito->transferir($credito, 50);
        alert("Transferidos 50€ de Débito → Crédito", 'success');
        alert("Saldo Débito: {$debito->getSaldo()}€", 'secondary');
        alert("Saldo Crédito: {$credito->getSaldo()}€", 'secondary');
    } catch (Exception $e) {
        alert("Error transferencia (débito → crédito): " . $e->getMessage(), 'danger');
    }

    try {
        $credito->transferir($debito, 400);
        alert("Transferidos 400€ de Crédito → Débito", 'success');
        alert("Saldo Crédito: {$credito->getSaldo()}€", 'secondary');
        alert("Saldo Débito: {$debito->getSaldo()}€", 'secondary');
    } catch (Exception $e) {
        alert("Error transferencia (crédito → débito): " . $e->getMessage(), 'danger');
    }

    ?>

    <h3 class="mt-4">Estado final</h3>
    <ul class="list-group mb-5">
        <li class="list-group-item">Cuenta Débito saldo: <?php echo $debito->getSaldo(); ?>€</li>
        <li class="list-group-item">Cuenta Crédito saldo: <?php echo $credito->getSaldo(); ?>€</li>
    </ul>
</div>
</body>
</html>
