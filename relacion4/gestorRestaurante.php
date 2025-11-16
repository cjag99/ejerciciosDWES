<?php
function encontrarRestaurante($nombre, $array)
{
    
    foreach ($array as $element) {
        if ($element->getNombre() === $nombre) {
           return $element;
        }
    }
    return null;
}

function addRestaurant(&$array, $nombre, $tipoCocina)
{
        array_push($array, new Restaurante($nombre, $tipoCocina));
}
function mostrarRestaurantes($array)
{
    foreach ($array as $element) {
        echo "<div>", $element->__toString(), "</div>";
    }
}

function getRestauranteRatings($array)
{
    foreach ($array as $element) {
        echo "<p>El restaurante ", $element->getNombre(), " tiene las siguientes puntuaciones: ", implode(",", $element->getRatings()), "</p>";
    }
}
function addValoracion($valoracion, $nombre, &$array)
{
    $restaurante = encontrarRestaurante($nombre, $array);
    if ($restaurante != null) {
        try {
            $restaurante->addRating($valoracion);
            echo "<p>Se ha añadido correctamente la valoración</p>";
        } catch (\ValueError $th) {
            echo $th->getMessage();
        }
    }else{
        echo "<p>No se ha encontrado el restaurante $nombre</p>";
    };
}
function addValoraciones($nombre, &$array)
{
    $restaurante = encontrarRestaurante($nombre, $array);
    if ($restaurante != null) {
        try {
           $valores = array_map('intval', explode(",", $_GET['valoraciones']));
            $restaurante->addRatings(...$valores);
            echo "<p>Se han añadido correctamente las valoraciones</p>";
        } catch (\ValueError $th) {
            echo $th->getMessage();
        }
    } else{
        echo "<p>No se ha encontrado el restaurante $nombre</p>";
    };
}

function mediaValoraciones($array)
{
    foreach ($array as $element) {
        echo "<p>El rating medio del restaurante ", $element->getNombre(), " es ", $element->getAverageRating(), "</p>";
    }
}

function delRestaurante($nombre, &$array)
{
    foreach($array as $key=>$restaurante){
        if($array[$key]->getNombre() === $nombre){
            unset($array[$key]);
            echo "<p>Se ha eliminado el restaurante $nombre</p>";
            return;
        }
    }
    echo "<p>No se puede eliminar ese restaurante. No existe</p>";
    
}

function closeSession()
{
    // 2. Destruye TODAS las variables de la sesión (liberando los objetos).
    $_SESSION = array(); 

    // 3. Destruye el archivo de sesión en el servidor.
    session_destroy();
}
function opcionesMenu(){
    if(isset($_GET['addRestaurant'])){
        addRestaurant($_SESSION['restaurantes'], $_GET['nombre'], $_GET['tipoCocina']);
    } elseif(isset($_GET['toString'])){
        mostrarRestaurantes($_SESSION['restaurantes']);
    } elseif(isset($_GET['getRatings'])){
        getRestauranteRatings($_SESSION['restaurantes']);
    } elseif(isset($_GET['addRating'])){
        addValoracion($_GET['valoracion'], $_GET['buscaNombre'], $_SESSION['restaurantes']);
    } elseif(isset($_GET['addRatings'])){
         addValoraciones($_GET['buscaNombre2'], $_SESSION['restaurantes']);
    } elseif(isset($_GET['averageRating'])){
        mediaValoraciones($_SESSION['restaurantes']);
    } elseif(isset($_GET['destroyRestaurant'])){
        delRestaurante($_GET['borraNombre'], $_SESSION['restaurantes']);
    };
}