<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11. Invertir elementos</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1>11. Invirtiendo valores</h1>
        <?php include "./functionsRel3.php";
        $var1 = "Hola";
        $var2 = "Adios";
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        echo "<h3>Valores iniciales</h3><ul>";
        echo "<li> Var 1: $var1</li>";
        echo "<li>Var 2: $var2</li>";
        echo "<li>";
        for ($i = 0; $i < count($array); $i++) {
            echo "$array[$i] ";
        }
        echo "</li></ul>";
        swap($var1, $var2);
        invertirArray($array);
        echo "<h3>Valores invertidos</h3><ul>";
        echo "<li> Var 1: $var1</li>";
        echo "<li>Var 2: $var2</li>";
        echo "<li>";
        for ($i = 0; $i < count($array); $i++) {
            echo "$array[$i] ";
        }
        echo "</li></ul>";
        ?>
    </div>
</body>

</html>