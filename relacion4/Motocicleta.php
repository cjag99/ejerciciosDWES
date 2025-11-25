<?php
require_once "./Encendible.php";

class Motocicleta implements Encendible {
    public function __construct(private string $matricula, private float $gasolina = 0.0, private int $bateria = 2, private bool $estado = false)
    {
        
    }
    public function __destruct()
    {
        
    }
    public function __toString() : string
    {
        $estadoStr = $this->estado ? "Encendida" : "Apagada";
        return "Motocicleta con matrícula ".$this->matricula.", gasolina: ".$this->gasolina." litros, batería: ".$this->bateria." Ah. Estado: ".$estadoStr.".";
    }
    public function encender(): void
    {
        if ($this->gasolina == 0.0 || $this->bateria < 1) {
            throw new Exception("No se puede encender la motocicleta sin gasolina.");
        }
        if ($this->estado) {
            throw new Exception("La motocicleta ya está encendida.");
        }
        $this->estado = true;
        echo "Motocicleta encendida correctamente.";
    }
    public function apagar(): void
    {
        if (!$this->estado) {
            throw new Exception("La motocicleta ya está apagada.");
        }
        $this->estado = false;
        echo "Motocicleta apagada correctamente.";
    }
}