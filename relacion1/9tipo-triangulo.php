<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de triángulo en php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!--
        Determina el tipo de triángulo según sus tres lados
        - Considera equilátero, isósceles o escaleno.
        - Nota: no se comprueba la desigualdad triangular; en uso real validar que los lados forman un triángulo.
    -->
    <h1>Determina el tipo del triángulo según sus lados</h1>
    <?php
    $lado1 = 2;
    $lado2 = 7;
    $lado3 = 5;
    echo "<p>Lado 1: $lado1</p>";
    echo "<p>Lado 2: $lado2</p>";
    echo "<p>Lado 3: $lado3</p>";
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "<p>El triángulo es equilátero.</p>";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "<p>El triángulo es isósceles.</p>";
    } else {
        echo "<p>El triángulo es escaleno.</p>";
    }
    ?>
</body>

</html>