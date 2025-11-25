<?php
require_once "./CuentaBancaria.php";

class CuentaDebito extends CuentaBancaria {
    public function __construct(string $numeroCuenta, string $titular, float $saldo = 0.0, int $numOperaciones = 0)
    {
        parent::__construct($numeroCuenta, $titular, $saldo, $numOperaciones);
    }
    public function __destruct()
    {
        
    }
    public function __toString() : string
    {
        return "Cuenta de débito: ".parent::__toString();
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
        if ($cantidad > $this->saldo) {
            throw new Exception("No se puede retirar más de lo que hay en la cuenta.");
        }
        parent::retirar($cantidad);
    }
    public function transferir(CuentaBancaria $cuentaDestino, float $cantidad) : void
    {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad a transferir debe ser positiva.");
        }
        if ($cantidad > $this->saldo) {
            throw new Exception("No se puede transferir más de lo que hay en la cuenta.");
        }
        parent::transferir($cuentaDestino, $cantidad);
    }
}