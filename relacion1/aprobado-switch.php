<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprobado o suspenso</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Aprobado o suspenso con switch</h1>
    <?php
        $nota = 6;
        echo "La nota es: $nota <br>";
        echo "El resultado es: ";
        switch ($nota){
            case 10:
            case 9: echo "SOBRESALIENTE"; 
                    break;
            case 8:
            case 7: echo "NOTABLE"; 
                    break;
            case 6: echo "BIEN";
                    break;
            case 5: echo "SUFICIENTE";
                    break;
            case 4:
            case 3:
            case 2:
            case 1:
            case 0: echo "INSUFICIENTE";
                    break;
            default: echo "Nota no válida";
        }
    ?>
</body>
</html>