<?php
require_once "./Encendible.php";
enum TipoBombilla {
    case INCANDESCENTE;
    case LED;
    case HALOGENA;
    case FLUORESCENTE;
}
class Bombilla implements Encendible {
    public function __construct(private TipoBombilla $tipo, private int $lumenes, private bool $estado=false)
    {
        
    }
    public function __destruct()
    {
        
    }
    public function __toString() : string
    {
        $estadoStr = $this->estado ? "Encendida" : "Apagada";
        return "Bombilla de tipo ".$this->tipo->name." con ".$this->lumenes." lúmenes. Estado: ".$estadoStr.".";
    }
    public function encender(): void
    {
        $this->estado = true;
    }
    public function apagar(): void
    {
        $this->estado = false;
    }
}