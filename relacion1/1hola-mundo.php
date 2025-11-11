<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo en php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <!--
        1 - Hola mundo en PHP
        - Ejemplo mínimo para confirmar que PHP está funcionando en el servidor.
        - Contiene ejemplos de salida con echo y llamadas a phpversion() / phpinfo().
        - Atención: phpinfo() muestra información sensible del servidor; no usar en producción.
    -->
    <h1>1- Hola mundo en Php</h1>
    <?php
    echo "Hola mundo";
    echo "<h2>Hola mundo como encabezado h2</h2>";
    echo "<p style='color:red;font-weight:bold';>Hola mundo como parrafo</p>"; //No se recomienda gestionar estilos o marcas con php
    echo "Hello<br>world"; //Salto de linea en php
    // Muestra la versión de PHP (útil en desarrollo)
    phpversion(); //Muestra la version de php
    // phpinfo() muestra la configuración completa del servidor; usar solo en entornos de desarrollo
    phpinfo(); //Muestra informacion del servidor y de la configuracion de php
    ?>
</body>

</html>