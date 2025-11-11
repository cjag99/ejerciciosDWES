<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCD (Algoritmo de Euclides)</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!--
        Cálculo del Máximo Común Divisor (MCD)
        - Implementado por el método de sustracción (versión didáctica del algoritmo de Euclides).
        - Nota: la versión más eficiente usa el operador módulo (%).
    -->
    <h1>Algoritmo de Euclides: Máximo común divisor</h1>
    <?php
    $a = 48;
    $b = 18;
    if ($a < 0 || $b < 0) {
        echo "Los números deben ser naturales (mayores o iguales a 0)";
    } else {
        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }
        echo "El máximo común divisor es: $a";
    }
    ?>
</body>

</html>