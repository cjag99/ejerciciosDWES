<?php
enum Orientacion{
    case HORIZONTAL;
    case VERTICAL;
}
class Bandera{
    public function __construct(private Orientacion $orientacion, private array $colores, private string $pais="sin adscripción")
    {
        
    }
    public function __destruct()
    {
        
    }
    public function __toString() : string
    {
        return "Bandera de ".$this->pais." con orientación ".$this->orientacion->name." y colores: ".implode(", ", $this->colores).".";
    }
    public function compareBandera(Bandera $banda) : bool
    {
        return $this->orientacion === $banda->orientacion && $this->colores === $banda->colores;
    }
    public function compareColores(Bandera $banda) : bool
    {
        return $this->colores === $banda->colores && $this->orientacion !== $banda->orientacion;
    }
    public function reverseColores() : void
    {
        $this->colores = array_reverse($this->colores);
    }
    public function reverseOrientacion() : void
    {
        $this->orientacion = $this->orientacion === Orientacion::HORIZONTAL ? Orientacion::VERTICAL : Orientacion::HORIZONTAL;
    }
}   
