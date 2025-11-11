<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División con algoritmo de Euclides</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!--
        División por sustracción (algoritmo tipo Euclides)
        - Implementa la división entera calculando cociente y resto mediante restas sucesivas.
        - Valida divisor != 0 y que los números sean naturales.
    -->
    <h1>Algoritmo de Euclides para la división de números naturales</h1>
    <?php
    $dividendo = 20;
    $divisor = 6;
    $cociente = 0;
    $resto = $dividendo;
    if ($dividendo < 0 || $divisor < 0) {
        echo "Los números deben ser naturales (mayores o iguales a 0)";
    } else {
        if ($divisor == 0) {
            echo "El divisor no puede ser 0";
        } else {
            while ($resto >= $divisor) {
                $resto -= $divisor;
                $cociente++;
            }
            echo "El resultado de dividir $dividendo entre $divisor es: <br>";
            echo "Cociente: $cociente <br>";
            echo "Resto: $resto <br>";
        }
    }
    ?>
</body>

</html>