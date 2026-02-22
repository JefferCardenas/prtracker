<?php
class Venta
{
    private $idVenta;
    private $fecha;
    private $total;

    public function __construct($idVenta = null, string $fecha, float $total)
    {
        $this->idVenta = $idVenta;
        $this->fecha = $fecha;
        $this->total = $total;
    }

    // --- GETTERS ---
    public function getIdVenta(): int
    {
        return $this->idVenta;
    }

    public function getFecha(): string
    {
        return $this->fecha;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    // --- SETTERS ---
    public function setIdVenta(int $idVenta): void
    {
        $this->idVenta = $idVenta;
    }

    public function setFecha(string $fecha): void
    {
        $this->fecha = $fecha;
    }

    public function setTotal(float $total): void
    {
        $this->total = $total;
    }
}