<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores con estilo</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!--
        Muestra los divisores de un número
        - Se resaltan en rojo los divisores; el algoritmo recorre todos los enteros desde 1 hasta n.
        - Para números grandes, usar un algoritmo que compruebe hasta sqrt(n) y agregue pares.
    -->
    <h1>Divisores con estilo en php</h1>
    <?php
    $numero = 10;
    $divisor = 1;
    echo "Los divisores de $numero son: <br>";
    while ($divisor <= $numero) {
        if ($numero % $divisor == 0) {
            echo "<span style='color: red;'>$divisor</span> ";
        } else {
            echo "$divisor ";
        }
        $divisor++;
    }
    ?>
</body>

</html>