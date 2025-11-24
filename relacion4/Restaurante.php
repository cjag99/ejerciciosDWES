<?php
// Clase Restaurante: modelo simple que almacena nombre, tipo de cocina
// y una lista de valoraciones (ratings). Incluye helpers para añadir
// valoraciones y calcular la media.
class Restaurante
{
    private  string $nombre;
    private string $tipoCocina;
    private  array $ratings;
    // Contador estático de instancias para demostración
    private static $numRest = 0;

    public function __construct($nombre, $tipoCocina)
    {
        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];
        Self::$numRest++;
    }

    public function __destruct()
    {
        Self::$numRest--;
    }

    // Representación en HTML del restaurante (uso en la UI)
    public function __toString()
    {
        $listaRatings = count($this->ratings) == 0
            ? "Sin valoraciones"
            : implode(", ", $this->ratings);

        return "<ul>\n" .
            "<li>Nombre: {$this->nombre}</li>\n" .
            "<li>Tipo de cocina: {$this->tipoCocina}</li>\n" .
            "<li>Ratings: {$listaRatings}</li>\n" .
            "</ul>";
    }

    // Setters básicos
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setTipoCocina($tipoCocina)
    {
        $this->tipoCocina = $tipoCocina;
    }

    // Devuelve el número total de restaurantes (estático)
    public static function totalRests()
    {
        return Self::$numRest;
    }

    /*Recalcula el contador estático de instancias a partir de una lista
    de objetos (por ejemplo el array guardado en la sesión). Esto es
    útil cuando los restaurantes se han restaurado desde una fuente
    externa o se han eliminado directamente del array y se necesita
    sincronizar el contador estático con el contenido real.
     @param array $lista Array de objetos Restaurante */
    public static function recalcNumRest(array $lista)
    {
        Self::$numRest = count($lista);
    }
    // Getters
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getTipoCocina()
    {
        return $this->tipoCocina;
    }
    public function getRatings()
    {
        return $this->ratings;
    }

    // Añade una valoración única validando rango (1-5)
    public function addRating($rating)
    {
        if ($rating > 5 || $rating < 1) {
            throw new ValueError("Ratings must be between 1 & 5");
        }
        array_push($this->ratings, $rating);
    }

    // Añade varias valoraciones mediante argumentos variádicos
    public function addRatings(...$ratings)
    {
        foreach ($ratings as $rating) {

            if ($rating < 1 || $rating > 5) {
                throw new ValueError("Ratings must be between 1 y 5");
            }
            array_push($this->ratings, $rating);
        }
    }

    // Calcula la media de las valoraciones o devuelve 0 si no hay.
    public function getAverageRating()
    {
        return count($this->ratings) != 0 ? array_sum($this->ratings) / count($this->ratings) : 0;
    }
}
