<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumulación de números naturales</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Acumulación de números naturales en php</h1>
    <?php
    $numero = 5;
    $suma = 0;
    // Suma de los primeros n números naturales mediante bucle.
    // Alternativa: fórmula matemática n*(n+1)/2 (más eficiente para n grande).
    for ($i = 1; $i <= $numero; $i++) {
        $suma += $i;
    }
    echo "La suma de los primeros $numero números naturales es: $suma";
    ?>
</body>

</html>