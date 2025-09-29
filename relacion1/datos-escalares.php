<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos escalares en php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Variables y datos escalares en php</h1>
    <?php
        $numero=123; //Variable de tipo entero
        $decimal=3.14; //Variable de tipo decimal
        $texto="Hola mundo"; //Variable de tipo cadena de texto
        $booleano=true; //Variable de tipo booleano (true o false)
        echo "Variable numero: $numero<br>";
        echo "Variable decimal: $decimal<br>";
        echo "Variable texto: $texto<br>";
        echo "Variable booleano: $booleano<br>"; //Muestra 1 si es true y nada si es false
        var_dump($numero); //Muestra el tipo y el valor de la variable
        echo "<br>";
        var_dump($decimal);
        echo "<br>";
        var_dump($texto);
        echo "<br>";
        var_dump($booleano);
        echo "<br>";
        printf("El numero es %d y el decimal es %.2f",$numero,$decimal); //Muestra el valor de las variables con formato
        printf("<br>El texto es %s",$texto);
        printf("<br>El booleano es %d",$booleano); //Muestra 1 si es true y 0 si es false
        printf("<br>La notacion cientifica del decimal es %.2e",$decimal); //Muestra el valor en notacion cientifica
    ?>  
</body>
</html>