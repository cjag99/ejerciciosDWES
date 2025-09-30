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
    $decimal = 175;
    $numAlmacenado = $decimal;
    $base = 16;
    $resultado = "";
    echo "El número original es $decimal y la base $base<br>";
    echo "El resultado es: ";
    if ($decimal == 0) {
        echo "0";
    } else {
        while ($numAlmacenado >= $base) {
            $digito = $numAlmacenado % $base;
            if ($digito > 9) {
                $caracter = chr(55 + $digito);
            } else {
                $caracter = (string) $digito;
            }
            $resultado = $caracter .  $resultado;
            $numAlmacenado = intval($numAlmacenado / $base);
        }
        if ($numAlmacenado > 9) {
            $caracter = chr(55 + $numAlmacenado);
        } else {
            $caracter = (string) $numAlmacenado;
        }
        echo $caracter . $resultado;
    }
    ?>

</body>

</html>