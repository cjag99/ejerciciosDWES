<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿El número es primo o no?</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>¿Es el número primo o no? Edición php</h1>
    <?php
    $numero = 13;
    $esPrimo = true;
    // Comprobación simple de primalidad (algoritmo O(n)).
    // Para optimizar, basta comprobar hasta sqrt(n) y evitar pares después del 2.
    if ($numero <= 1) {
        echo "El número $numero no puede ser primo.";
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
    }
    if ($esPrimo) {
        echo "El número $numero es primo.";
    } else {
        echo "El número $numero no es primo.";
    }
    ?>
</body>

</html>