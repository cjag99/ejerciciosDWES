<?php
class Restaurante
{
    private  string $nombre;
    private string $tipoCocina;
    private  array $ratings;
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
    public function __toString()
    {
        $listaRatings = count($this->ratings) == 0
            ? "Sin valoraciones"
            : implode(", ", $this->ratings);

        return "<ul>
                    <li>Nombre: {$this->nombre}</li>
                    <li>Tipo de cocina: {$this->tipoCocina}</li>
                    <li>Ratings: {$listaRatings}</li>
                </ul>";
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setTipoCocina($tipoCocina)
    {
        $this->tipoCocina = $tipoCocina;
    }
    public static function totalRests()
    {
        return Self::$numRest;
    }
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

    public function addRating($rating)
    {
        if ($rating > 5 || $rating < 1) {
            throw new ValueError("Ratings must be between 1 & 5");
        }
        array_push($this->ratings, $rating);
    }

    public function addRatings(...$ratings)
    {
        foreach ($ratings as $rating) {

            if ($rating < 1 || $rating > 5) {
                throw new ValueError("Ratings must be between 1 y 5");
            }
            array_push($this->ratings, $rating);
        }
    }

    public function getAverageRating()
    {
        return count($this->ratings) != 0 ? array_sum($this->ratings) / count($this->ratings) : 0;
    }
}
