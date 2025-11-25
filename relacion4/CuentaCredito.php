<?php
require_once "./CuentaBancaria.php";

class CuentaCredito extends CuentaBancaria {
    public function __construct(string $numeroCuenta, string $titular, float $saldo = 0.0, int $numOperaciones = 0, private float $limiteDescubierto = -500.0)
    {
        parent::__construct($numeroCuenta, $titular, $saldo, $numOperaciones);
        $this->limiteDescubierto = $limiteDescubierto;
    }
    public function __destruct()
    {
        
    }
    public function __toString() : string
    {
        return "Cuenta de crédito: ".parent::__toString();
    }
    public function getLimiteDescubierto() : float
    {
        return $this->limiteDescubierto;
    }  
    public function ingresar(float $cantidad) : void
    {
            if ($cantidad <= 0) {
                throw new Exception("La cantidad a ingresar debe ser positiva.");
            }
            
        parent::ingresar($cantidad);
    }
    public function retirar(float $cantidad) : void
    {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad a retirar debe ser positiva.");
        }
        if ($this->saldo - $cantidad < $this->limiteDescubierto) {
            throw new Exception("No se puede retirar esa cantidad, se excede el límite de descubierto.");
        }
        parent::retirar($cantidad);
    }
    public function transferir(CuentaBancaria $cuentaDestino, float $cantidad) : void
    {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad a transferir debe ser positiva.");
        }
        if ($this->saldo - $cantidad < $this->limiteDescubierto) {
            throw new Exception("No se puede transferir esa cantidad, se excede el límite de descubierto.");
        }
        parent::transferir($cuentaDestino, $cantidad);
    }
}