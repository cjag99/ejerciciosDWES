<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos en php</title>
    <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Objetos y métodos en php</h1>
    <?php
    class Fruta
    {
        //Atributos o propiedades
        public $name;
        public $colour;
        //Métodos o funciones
        public function __construct($name, $colour)
        {
            $this->name = $name;
            $this->colour = $colour;
        }
        public function get_name()
        {
            return $this->name;
        }
        public function set_name($name)
        {
            $this->name = $name;
        }
        public function get_colour()
        {
            return $this->colour;
        }
    }

    $apple = new Fruta("Manzana", "Roja");
    $banana = new Fruta("Plátano", "Amarillo");
    echo "La fruta " . $apple->get_name() . " es de color " . $apple->get_colour() . "<br>";
    echo "La fruta " . $banana->get_name() . " es de color " . $banana->get_colour();
    ?>
</body>

</html>