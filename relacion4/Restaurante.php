<?php
class Restaurante
{
    public  string $nombre;
    public string $tipoCocina;
    public  array $ratings;

    public function __construct($nombre, $tipoCocina)
    {
        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];
    }

    public function __destruct()
    {
        print("Destruyendo " . $this->nombre . "...");
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

    public function getNumRatings()
    {
        return count($this->ratings);
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
            array_push($this->ratings, ...$ratings);
        }
    }

    public function getAverageRating()
    {
        return count($this->ratings) != 0 ? array_sum($this->ratings) / count($this->ratings) : 0;
    }
}
