<?php
function mostrarPrimos($num)
{
    echo "<div class='mt-4 text-center'>";
    echo "<h3 class='text-primary'>Números primos entre 1 y $num:</h3>";
    echo "<p class='mt-2'>";
    for ($i = 1; $i <= $num; $i++) {
        $esPrimo = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $esPrimo = false;
                break;
            }
        }
        if ($esPrimo) {
            echo "<span class='mx-1 fw-bold'>$i</span>";
        }
    }
    echo "</p></div>";
}
function factorial($num)
{
    if (intval($num) == 1) {
        return $num;
    } else {
        return $num * factorial($num - 1);
    }
}
function divisionEuclides($dividendo, $divisor)
{
    if ($dividendo < 0 || $divisor < 0) {
        return "Los números deben ser naturales (mayores o iguales a 0)";
    }
    if ($divisor == 0) {
        return "El divisor no puede ser 0";
    }
    //Caso base dividendo menor que divisor: cociente es 0 y el resto es el divisor
    if ($dividendo < $divisor) {
        return [
            "cociente" => 0,
            "resto" => $dividendo
        ];
    }
    // Caso recursivo: restamos el divisor y aumentamos el cociente en 1
    $resultado = divisionEuclides($dividendo - $divisor, $divisor);
    $resultado["cociente"]++;
    return $resultado;
}

function mcdEuclides($num1, $num2)
{
    if ($num1 == $num2) {
        return $num1;
    } elseif ($num1 > $num2) {
        return mcdEuclides($num1 - $num2, $num2);
    } else {
        return mcdEuclides($num1, $num2 - $num1);
    }
}
