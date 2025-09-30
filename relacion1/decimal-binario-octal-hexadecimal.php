<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de decimal por bits</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Conversión de decimal por bits: binario, octal, hexadecimal</h1>
    <?php
    $decimal = 100;
    $binario = [];
    $octal = [];
    $hexadecimal = [];

    $numBin = $decimal;
    $numOct = $decimal;
    $numHex = $decimal;

    // Binario
    do {
        array_push($binario, $numBin % 2);
        $numBin = intdiv($numBin, 2);
    } while ($numBin > 0);

    // Octal
    do {
        array_push($octal, $numOct % 8);
        $numOct = intdiv($numOct, 8);
    } while ($numOct > 0);

    // Hexadecimal
    do {
        array_push($hexadecimal, $numHex % 16);
        $numHex = intdiv($numHex, 16);
    } while ($numHex > 0);

    // Invertimos porque los restos se generan al revés
    $binario = array_reverse($binario);
    $octal = array_reverse($octal);
    $hexadecimal = array_reverse($hexadecimal);

    // Mostrar resultados
    echo "El número decimal $decimal en binario es: ";
    foreach ($binario as $bit) {
        echo $bit;
    }
    echo "<br>El número decimal $decimal en octal es: ";
    foreach ($octal as $bit) {
        echo $bit;
    };
    echo "<br>El número decimal $decimal en hexadecimal es: ";
    foreach ($hexadecimal as $bit) {
        if ($bit < 10) {
            echo $bit;
        } else {
            switch ($bit) {
                case 10:
                    echo "A";
                    break;
                case 11:
                    echo "B";
                    break;
                case 12:
                    echo "C";
                    break;
                case 13:
                    echo "D";
                    break;
                case 14:
                    echo "E";
                    break;
                case 15:
                    echo "F";
                    break;
            }
        }
    }
    ?>

</body>

</html>