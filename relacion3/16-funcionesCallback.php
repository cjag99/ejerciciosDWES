<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16. Funciones Callback</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">16 - Funciones callback</h1>
        <?php
        // Ejemplo sobre callbacks y funciones de orden superior en arrays:
        // - array_filter con una función de prueba (esPrimo)
        // - array_map para transformar (cuadrado)
        // - array_walk para modificar in-place
        $array = range(1, 100);

        // Comprueba que todos los elementos son positivos
        function todosPos($array)
        {
            $esPos = true;
            foreach ($array as $value) {
                if ($value < 0) {
                    $esPos = false;
                    break;
                }
            }
            return $esPos;
        }

        // Comprueba si existe al menos un múltiplo de 5
        function existeMultiplo5($array)
        {
            $existe = false;
            foreach ($array as $value) {
                if ($value % 5 == 0) {
                    $existe = true;
                    break;
                }
            }
            return $existe;
        }

        // Determina si un número es primo (versión simple)
        function esPrimo($num)
        {
            $esPrimo = false;
            switch ($num) {
                case 1:
                case 2:
                case 3:
                    $esPrimo = true;
                    break;
                default:
                    // Nota: esta implementación es didáctica; puede optimizarse comprobando hasta sqrt(num)
                    for ($i = 2; $i < $num; $i++) {
                        if ($num % $i == 0) {
                            $esPrimo = false;
                            break;
                        } else {
                            $esPrimo = true;
                        }
                    }
            }
            return $esPrimo;
        }

        // Busca la primera ocurrencia de un número cuyas dos primeras cifras coinciden
        function cifrasIguales($array)
        {
            $resultado = null;
            foreach ($array as $value) {
                $textoValor = strval($value);
                if (strlen($textoValor) > 1) {
                    if ($textoValor[0] == $textoValor[1]) {
                        $resultado = $textoValor;
                        break;
                    }
                }
            }
            return $resultado;
        }

        function cuadrado($num)
        {
            return $num ** 2;
        }

        // Uso de callbacks junto con funciones de array
        $esPos = todosPos($array);
        $existe = existeMultiplo5($array);
        $numPrimos = array_filter($array, "esPrimo");
        $cifrasIguales = cifrasIguales($array);
        $cuadrados = array_map("cuadrado", $array);
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Valores iniciales del array</h2>';
        foreach ($array as $value) {
            echo " $value ";
        }
        echo "</div></div>";
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">¿Son los elementos del array todos positivos?</h2>';
        if ($esPos) {
            echo '<div class="alert alert-success mt-2">Los elementos del array son positivos</div>';
        } else {
            echo '<div class="alert alert-danger mt-2">No todos los elementos del array son positivos</div>';
        }
        echo "</div></div>";
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">¿Existe en el array algún múltiplo de 5?</h2>';
        if ($existe) {
            echo '<div class="alert alert-info mt-2">En el array existe al menos un elemento múltiplo de 5</div>';
        } else {
            echo '<div class="alert alert-warning mt-2">En el array no existe ningún elemento múltiplo de 5</div>';
        }
        echo "</div></div>";
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Mostrando valores primos del array</h2>';
        foreach ($numPrimos as $value) {
            echo " $value ";
        }
        echo "</div></div>";
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Mostrando la primera ocurrencia de un número cuyas 2 cifras son idénticas</h2>';
        echo '<div class="alert alert-primary mt-2">La primera ocurrencia de un número con 2 cifras iguales es ' . $cifrasIguales . '</div>';
        echo "</div></div>";
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Mostrando el cuadrado de cada valor del array</h2>';
        foreach ($cuadrados as $value) {
            echo " $value ";
        }
        echo "</div></div>";

        array_walk($array, fn(&$n) => $n *= 2);
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Mostrando el doble de cada valor del array</h2>';
        foreach ($array as $value) {
            echo " $value ";
        }
        echo "</div></div>";
        ?>
    </div>

</body>


</html>