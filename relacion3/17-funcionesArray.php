<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17. Funciones Array</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">17- Funciones Array</h1>
        <?php
        function numImpares($num)
        {
            if ($num % 2 != 0) {
                return $num;
            }
        }
        function multiplos3($num)
        {
            if ($num % 3 == 0) {
                return $num;
            }
        }
        function mayor10($num)
        {

            if ($num >= 10) {
                return $num;
            }
        }
        $array = range(1, 20);
        $arrayImpares = array_filter($array, "numImpares");
        $multiplos3 = array_filter($array, "multiplos3");
        $combine = array_merge($arrayImpares, $multiplos3);
        sort($combine);
        $repeticiones = array_count_values($combine);
        $diferencia = array_diff($arrayImpares, $multiplos3);
        $invertidos = array_flip($combine);
        $repetidos = array_intersect($arrayImpares, $multiplos3);
        $invertido = $combine;
        $reverse = $combine;
        $mezclado = $combine;
        $noRepetidos = array_unique($combine);
        $numAleatorio = rand(1, 20);
        $arrayRev = array_reverse($combine);
        $filtrados = array_filter($combine, "mayor10");
        $texto1 = "Hola";
        $texto2 = "que";
        $texto3 = "tal";
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Observando las funciones Array:</h2>';
        echo "Elementos del array con los números impares del 1 al 20: <br>";
        foreach ($arrayImpares as $value) {
            echo " $value ";
        }
        echo "<br>";
        echo "Elementos del array con los múltiplos de 3 del 1 al 20: <br>";
        foreach ($multiplos3 as $value) {
            echo " $value ";
        }
        echo "<br>";
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item">Combinación de ambos arrays de manera ordenada (el elemento repetido está en negrita):<br>';
        foreach ($combine as $i => $value) {
            if (isset($combine[$i + 1])) {
                if ($combine[$i] == $combine[$i + 1]) {
                    echo "<b>", $value, "</b> ";
                } else {
                    echo $value, " ";
                }
            } else {
                echo $value;
            }
        }
        echo "</li>";
        echo '<li class="list-group-item">Nº de veces que aparece cada elemento:<br>';
        echo '<table class="table table-bordered table-striped text-center align-middle mt-3">';
        echo '<thead class="table-primary">';
        echo '<tr><th>Número</th><th>Repeticiones</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($repeticiones as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo "</li>";
        echo '<li class="list-group-item">Mostrando la diferencia entre ambos array de diferentes maneras (array_diff):<br>';
        echo "</li>";
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item">array_diff normal: ', implode(",", $diferencia), '</li>';
        $diferencia = array_diff_assoc($arrayImpares, $multiplos3);
        echo '<li class="list-group-item">array_diff_assoc: ', implode(",", $diferencia), '</li>';
        $diferencia = array_diff_key($arrayImpares, $multiplos3);
        echo '<li class="list-group-item">array_diff_key: ', implode(",", $diferencia), '</li>';
        $diferencia = array_diff_uassoc($arrayImpares, $multiplos3, fn($a, $b) => $a <=> $b);
        echo '<li class="list-group-item">array_diff_uassoc: ', implode(",", $diferencia), '</li>';
        $diferencia = array_diff_ukey($arrayImpares, $multiplos3, fn($a, $b) => $a <=> $b);
        echo '<li class="list-group-item">array_diff_ukey: ', implode(",", $diferencia), '</li>';
        echo '</ul>';
        echo '<li class="list-group-item">Obteniendo el primer y último valor del array combinado de los 2:<br>';
        //!:array_first y array_last no están disponibles en la versión actual de php
        echo "Primero=>", $combine[0] . "   Último=>", $combine[count($combine) - 1], "</li>";
        echo '<li class="list-group-item">Mostrando el array con claves y valores intercambiados:<br>';
        echo '<table class="table table-bordered table-striped text-center align-middle mt-3">';
        echo '<thead class="table-primary">';
        echo '<tr><th>Clave</th><th>Valor</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($invertidos as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo "</li>";
        echo '<li class="list-group-item">Mostrando el array con solo los elementos repetidos en los 2 arrays iniciales:<br>';
        echo implode(",", $repetidos), "</li>";
        arsort($invertido);
        echo '<li class="list-group-item">Mostrando el array combinado en orden inverso con arsort:<br>';
        echo '<table class="table table-bordered table-striped text-center align-middle mt-3">';
        echo '<thead class="table-primary">';
        echo '<tr><th>Clave</th><th>Valor</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($invertido as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo "</li>";
        rsort($reverse);
        echo '<li class="list-group-item">Mostrando el array combinado en orden inverso con rsort:<br>';
        echo '<table class="table table-bordered table-striped text-center align-middle mt-3">';
        echo '<thead class="table-primary">';
        echo '<tr><th>Clave</th><th>Valor</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($reverse as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo "</li>";
        shuffle($mezclado);
        echo '<li class="list-group-item">Mostrando el array combinado en orden aleatorio con shuffle:<br>';
        echo implode(",", $mezclado), "</li>";
        echo '<li class="list-group-item">Mostrando el array con los elementos no repetidos solo:<br>';
        echo implode(",", $noRepetidos), "</li>";
        echo '<li class="list-group-item">Mostrando todos los valores de un array sin tener que iterar sobre él:<br>';
        echo implode(",", array_values($combine)), "</li>";
        echo '<li class="list-group-item">Mostrando la primera posición dentro del array combinado de un nº aleatorio entre 1 y 20:<br>';
        if (array_search($numAleatorio, $combine) !== false) {
            echo "El nº $numAleatorio se encuentra en la posición ", array_search($numAleatorio, $combine);
        } else {
            echo "El nº $numAleatorio no está en el array";
        }
        echo "</li>";
        echo '<li class="list-group-item">Mostrando el array combinado del revés con array_reverse():<br>';
        echo implode(",", $arrayRev), "</li>";
        echo '<li class="list-group-item">Mostrando partes del array combinado con array_slice():<br>';
        echo "Primeras 5 posiciones: ", implode(",", array_slice($combine, 0, 5)), "<br>";
        echo "Últimas 5 posiciones: ", implode(",", array_slice($combine, -5)), "</li>";
        echo '<li class="list-group-item">Mostrando elementos del array combinado con un filtro:<br>';
        echo implode(",", $filtrados), "</li>";
        echo '<li class="list-group-item">Mostrando elementos del array combinado pero el último elemento ha sido extraido:<br>';
        array_pop($combine);
        echo implode(",", $combine), "</li>";
        echo '<li class="list-group-item">Mostrando elementos del array combinado pero se ha añadido un nuevo elemento al final:<br>';
        array_push($combine, 30);
        echo implode(",", $combine), "</li>";
        $reemplazado = array_splice($combine, 0, count($combine), "Elemento reemplazado");
        echo '<li class="list-group-item">Mostrando elementos del array combinado pero se han reemplazado todos sus elementos por "Elemento reemplazado":<br>';
        echo implode(",", $combine), "</li>";
        $arrayCompacto = compact("texto1", "texto2", "texto3");
        echo '<li class="list-group-item">Mostrando elementos de un array nuevo creado con la funcion compact():<br>';
        echo implode(",", $arrayCompacto), "</li>";
        echo '<li class="list-group-item">Mostrando la longitud del array combinado:<br>', count($reemplazado), '</li>';
        echo "</ul>";
        echo "</div></div>";
        ?>
    </div>
</body>

</html>