<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12. Algoritmo Bubble Sorting</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1>12- Algoritmo Bubble Sorting</h1>
        <?php
        $datos = ['Pérez', 'García', 'López', 'Márquez', 'Álvarez', 'Domínguez', 'Ruíz', 'Díaz'];
        function bubbleSort(&$array)
        {
            setlocale(LC_COLLATE, 'es_ES.UTF-8', 'es_ES.utf8', 'es_ES', 'Spanish_Spain.1252'); //Para poder ordenar correctamente palabras con tilde
            for ($i = 0; $i < count($array); $i++) {
                for ($j = 0; $j < count($array) - 1 - $i; $j++) { //Por cada vuelta del primer bucle, el elemento recorre todo el array
                    if (strcoll($array[$j], $array[$j + 1]) > 0) { //strcoll nos permite comparar cadenas en función de los ajustes locales (setlocale)
                        $temp = $array[$j];
                        $array[$j] = $array[$j + 1];
                        $array[$j + 1] = $temp;
                    }
                }
            }
        }
        echo "<h2>Ordenando arrays mediante bubble sorting</h2>";
        echo "<h3>Valores iniciales:</h3>";
        print_r($datos);
        bubbleSort($datos);
        echo "<h3>Valores ordenados mediante bubble sorting:</h3>";
        print_r($datos);
        $datosEng = ['Smith', 'Johnson', 'Williams', 'Brown', 'Jones', 'Miller', 'Davis', 'Garcia', 'Rodriguez', 'Martinez'];
        echo "<h2>Ordenando arrays como números</h2>";
        echo "<h3>Valores iniciales:</h3>";
        print_r($datosEng);
        sort($datosEng, SORT_STRING);
        echo "<h3>Valores ordenados mediante sort:</h3>";
        print_r($datosEng);

        ?>
    </div>
</body>

</html>