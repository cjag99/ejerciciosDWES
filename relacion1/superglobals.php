<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals de php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Superglobals de php</h1>
    <?php
    echo "<ul>";
    echo "<li> DOCUMENT_ROOT : ". $_SERVER['DOCUMENT_ROOT'] ."</li>"; 
    echo "<li> PHP_SELF : ". $_SERVER['PHP_SELF'] ."</li>"; 
    echo "<li> SERVER_NAME : ". $_SERVER['SERVER_NAME'] ."</li>"; 
    echo "<li> SERVER_SOFTWARE : ". $_SERVER['SERVER_SOFTWARE'] ."</li>"; 
    echo "<li> SERVER_PROTOCOL : ". $_SERVER['SERVER_PROTOCOL'] ."</li>"; 
    echo "<li> HTTP_HOST : ". $_SERVER['HTTP_HOST'] ."</li>"; 
    echo "<li> HTTP_USER_AGENT : ". $_SERVER['HTTP_USER_AGENT'] ."</li>"; 
    echo "<li> REMOTE_ADDR : ". $_SERVER['REMOTE_ADDR'] ."</li>"; 
    echo "<li>REMOTE_PORT : ". $_SERVER['REMOTE_PORT'] ."</li>"; 
    echo "<li>SCRIPT_FILENAME : ". $_SERVER['SCRIPT_FILENAME'] ."</li>"; 
    echo "</ul>";
    echo "USANDO print_r:<br>";
    print_r($_SERVER); 
    echo "USANDO var_dump:<br>";
    var_dump($_SERVER); 
    ?>
    </body>
</html>