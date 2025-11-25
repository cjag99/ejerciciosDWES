<?php

abstract class CuentaBancaria {
    public function __construct(protected string $numeroCuenta, protected string $titular, protected float $saldo = 0.0, protected int $numOperaciones)
    {
        
    }
    public function __destruct()
    {
        
    }
    public function __toString() : string
    {
        return "Cuenta bancaria número ".$this->numeroCuenta." del titular ".$this->titular." con saldo de ".$this->saldo." euros y ".$this->numOperaciones." operaciones realizadas.";
    }
    public function getSaldo() : float
    {
        return $this->saldo;
    }
    public function ingresar(float $cantidad) : void
    {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad a ingresar debe ser positiva.");
        }
        $this->saldo += $cantidad;
        $this->numOperaciones++;
    }
    public function retirar(float $cantidad) : void
    {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad a retirar debe ser positiva.");
        }
        
        $this->saldo -= $cantidad;
        $this->numOperaciones++;
    }
    public function transferir(CuentaBancaria $cuentaDestino, float $cantidad) : void
    {
        if ($cantidad <= 0) {
            throw new Exception("La cantidad a transferir debe ser positiva.");
        }
        
        $this->retirar($cantidad);
        $cuentaDestino->ingresar($cantidad);
        $this->numOperaciones++;
    }
}