<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal a binario</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!--
        Conversión de número decimal a binario
        - Construye la representación binaria dividiendo por 2 y acumulando restos.
        - Caso especial: si el número es 0, se imprime 0.
    -->
    <h1>Decimal a binario en php</h1>
    <?php
    $decimal = 33;
    $numAlmacenado = $decimal;
    $binario = "";
    if ($decimal == 0) {
        echo "El número decimal $decimal en binario es: 0";
    } else {
        while ($numAlmacenado >= 2) {
            $binario = (string) $numAlmacenado % 2 . $binario;
            $numAlmacenado = intval($numAlmacenado / 2);
        }
        echo "El número decimal $decimal en binario es: 1" . $binario;
    }
    ?>
</body>

</html>