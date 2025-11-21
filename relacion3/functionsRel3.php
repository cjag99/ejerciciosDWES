<?php
// Muestra en HTML los números primos desde 1 hasta $num
// - Implementación sencilla: para cada i se comprueba divisibilidad por 2..i-1
// - Uso: mostrarPrimos(10) imprimirá primes entre 1 y 10
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
// Calcula el factorial de forma recursiva
// - Retorna n! para n >= 1
function factorial($num)
{
    if (intval($num) == 1) {
        return $num;
    } else {
        return $num * factorial($num - 1);
    }
}
// División entera mediante restas sucesivas (versión recursiva didáctica)
// - Retorna un array asociativo con 'cociente' y 'resto'
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

// Máximo común divisor por sustracción (algoritmo de Euclides)
// - Versión recursiva usando restas
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
// Intercambia dos variables por referencia
function swap(&$var1, &$var2)
{
    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;
}
// Invierte un array in-place usando swap() por referencia
function invertirArray(&$array)
{
    $n = count($array);
    for ($i = 0; $i < $n / 2; $i++) {
        swap($array[$i], $array[$n - $i - 1]);
    }
}

function calcularLetraDNI($numDNI)
{
    $letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
    return $letras[(intval($numDNI) % 23) - 1];
}

function calcularLetraNIE($nie)
{
    $numeroNIE = match ($nie[0]) {
        "X" => "0",
        "Y" => "1",
        "Z" => "2",
        default => "0",
    };

    // Concatenar los dígitos restantes
    $numeroNIE .= substr($nie, 1);

    return calcularLetraDNI(intval($numeroNIE));
}
function formatTIE(&$tie)
{
    return str_pad($tie, 8, "0", STR_PAD_LEFT);
}
