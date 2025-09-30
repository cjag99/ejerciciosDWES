<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal a binario</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Decimal a binario en php</h1>
    <?php
    $decimal = 100;
    $numAlmacenado = $decimal;
    $binario = [];
    if ($decimal == 0) {
        array_push($binario, 0);
    } else {
        while ($numAlmacenado >= 1) {
            array_push($binario, $numAlmacenado % 2);
            $numAlmacenado /= 2;
        }
    }
    $binario = array_reverse($binario);
    echo "El número decimal $decimal en binario es: ";
    foreach ($binario as $bit) {
        echo $bit;
    }
    ?>
</body>

</html>