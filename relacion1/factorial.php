<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de factorial</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Cálculo del factorial en php</h1>
    <?php
        $numero = 5;
        $factorial = 1;
        for ($i=$numero; $i > 1 ; $i--) { 
            $factorial *= $i;
        }
        echo "El factorial de $numero es: $factorial";
    ?>
</body>
</html>