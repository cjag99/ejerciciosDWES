<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18. Menú de restaurante</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>
<body class="bg-light">
    <h1 class="text-center mb-5 text-primary">18- Menú restaurante</h1>
    <?php
    $menu = ['entrante' => array('Ensalada César','Hummus','Boquerones al natural'),
    'primero' => array('Gazpachuelo','Salmorejo','Ajo Blanco'),
    'segundo' => array('Fritura Malagueña','Conejo al ajillo','Pisto con huevo'),
    'postre' => array('Helado 3 sabores','Flan','Tarta de Queso')];
    function mostrarSugerencias($n){
        if($n >81){
            throw new ValueError("Error, el menú tiene un máximo de 81 sugerencias");
        }
        echo '<div class="card mb-4 shadow-sm">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title text-secondary mb-3">Sugerencias del menú :</h2>';
        for($i = 1; $i <= $n; $i++){
            
        }
    }
    echo '<div class="card mb-4 shadow-sm">';
    echo '<div class="card-body">';
    echo '<h2 class="card-title text-secondary mb-3">Opciones del menú :</h2>';
    foreach($menu as $key=>$value){
        echo "$key =>";
        foreach($value as $valor){
            echo " $valor ";
        }
        echo "<br>";
    }
    echo "</div></div>";
    ?>
</body>
</html>