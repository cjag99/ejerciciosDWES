<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumulación de números naturales</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Acumulación de números naturales en php</h1>
    <?php
        $numero = 5;
        $suma = 0;
        for ($i=1; $i <= $numero ; $i++) { 
            $suma += $i;
        }
        echo "La suma de los primeros $numero números naturales es: $suma";
    ?>
</body>
</html>