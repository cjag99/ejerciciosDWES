<?php
function encontrarRestaurante($nombre, $array)
{
    $result = null;
    foreach ($array as $element) {
        if ($element->getNombre() === $nombre) {
            $result = $element;
        }
    }
    return $result;
}

function addRestaurant($array)
{

    if (isset($_GET['nombre']) && isset($_GET['tipoCocina'])) {
        array_push($array, new Restaurante($_GET['nombre'], $_GET['tipoCocina']));
    }
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
        echo "<p>El restaurante ", $element->getNombre(), " tiene las siguientes puntuaciones: ", implode(",", $element->getNumRatings()), "</p>";
    }
}
function addValoracion($valoracion, $nombre, $array)
{
    $restaurante = encontrarRestaurante($nombre, $array);
    if ($restaurante != null) {
        try {
            $restaurante->addRating($valoracion);
            echo "<p>Se ha añadido correctamente la valoración</p>";
        } catch (\ValueError $th) {
            echo $th->getMessage();
        }
    }
}
function addValoraciones($nombre, $array, ...$valoraciones)
{
    $restaurante = encontrarRestaurante($nombre, $array);
    if ($restaurante != null) {
        try {
            $restaurante->addRatings(...$valoraciones);
            echo "<p>Se han añadido correctamente las valoraciones</p>";
        } catch (\ValueError $th) {
            echo $th->getMessage();
        }
    }
}

function mediaValoraciones($array)
{
    foreach ($array as $element) {
        echo "<p>El rating medio del restaurante ", $element->getNombre(), " es ", $element->getAverageRating(), "</p>";
    }
}

function delRestaurante($nombre, $array)
{
    $restaurante = encontrarRestaurante($nombre, $array);
    if ($restaurante != null) {
        unset($restaurante);
    } else {
        echo "<p>No se puede eliminar un restaurante que no existe</p>";
    }
}
