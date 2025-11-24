<?php
// Módulo gestorRestaurante: funciones auxiliares para crear, buscar,
// eliminar y gestionar valoraciones de objetos `Restaurante` guardados
// en la sesión. Estas funciones se usan desde `menuRestaurante.php`.

/**
 * Busca un restaurante por nombre en el array proporcionado.
 * @param string $nombre Nombre a buscar
 * @param array $array Array de objetos Restaurante
 * @return Restaurante|null Devuelve el objeto Restaurante o null si no existe
 */
function encontrarRestaurante($nombre, $array)
{
    foreach ($array as $element) {
        if ($element->getNombre() === $nombre) {
            return $element;
        }
    }
    return null;
}

/**
 * Añade un nuevo restaurante al array pasado por referencia.
 * @param array &$array Array (por referencia) donde se guardan los restaurantes
 * @param string $nombre
 * @param string $tipoCocina
 */
function addRestaurant(&$array, $nombre, $tipoCocina)
{
    array_push($array, new Restaurante($nombre, $tipoCocina));
}

/**
 * Muestra la representación HTML de cada restaurante llamando a __toString().
 */
function mostrarRestaurantes($array)
{
    foreach ($array as $element) {
        echo "<div>", $element->__toString(), "</div>";
    }
}

/**
 * Muestra las valoraciones almacenadas (array) de cada restaurante.
 */
function getRestauranteRatings($array)
{
    foreach ($array as $element) {
        echo "<p>El restaurante ", $element->getNombre(), " tiene las siguientes puntuaciones: ", implode(",", $element->getRatings()), "</p>";
    }
}

/**
 * Añade una única valoración a un restaurante identificado por nombre.
 * Captura ValueError si la valoración está fuera de rango.
 */
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
    } else {
        echo "<p>No se ha encontrado el restaurante $nombre</p>";
    };
}

/**
 * Añade varias valoraciones separadas por comas (se leen de GET en el
 * flujo principal de la aplicación) y las pasa al objeto Restaurante.
 */
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
    } else {
        echo "<p>No se ha encontrado el restaurante $nombre</p>";
    };
}

/**
 * Calcula y muestra la media de valoraciones de cada restaurante.
 */
function mediaValoraciones($array)
{
    foreach ($array as $element) {
        echo "<p>El rating medio del restaurante ", $element->getNombre(), " es ", $element->getAverageRating(), "</p>";
    }
}

/**
 * Elimina un restaurante por nombre del array (por referencia).
 */
function delRestaurante($nombre, &$array)
{
    foreach ($array as $key => $restaurante) {
        if ($array[$key]->getNombre() === $nombre) {
            unset($array[$key]);
            echo "<p>Se ha eliminado el restaurante $nombre</p>";
            return;
        }
    }
    echo "<p>No se puede eliminar ese restaurante. No existe</p>";
}

/**
 * Cierra la sesión: limpia el array de sesión y destruye el archivo de sesión.
 */
function closeSession()
{
    // 2. Destruye TODAS las variables de la sesión (liberando los objetos).
    $_SESSION = array();

    // 3. Destruye el archivo de sesión en el servidor.
    session_destroy();
}

/**
 * Comprueba las variables GET para ejecutar la opción correspondiente.
 * Se usa desde la página que incluye este gestor para centralizar
 * la lógica de control.
 */
function opcionesMenu()
{
    if (isset($_GET['addRestaurant'])) {
        addRestaurant($_SESSION['restaurantes'], $_GET['nombre'], $_GET['tipoCocina']);
    } elseif (isset($_GET['toString'])) {
        mostrarRestaurantes($_SESSION['restaurantes']);
    } elseif (isset($_GET['getRatings'])) {
        getRestauranteRatings($_SESSION['restaurantes']);
    } elseif (isset($_GET['addRating'])) {
        addValoracion($_GET['valoracion'], $_GET['buscaNombre'], $_SESSION['restaurantes']);
    } elseif (isset($_GET['addRatings'])) {
        addValoraciones($_GET['buscaNombre2'], $_SESSION['restaurantes']);
    } elseif (isset($_GET['averageRating'])) {
        mediaValoraciones($_SESSION['restaurantes']);
    } elseif (isset($_GET['destroyRestaurant'])) {
        delRestaurante($_GET['borraNombre'], $_SESSION['restaurantes']);
    };
}
