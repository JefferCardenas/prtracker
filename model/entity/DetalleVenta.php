<?php
class DetalleVenta
{

    private $idDetalleVenta;
    private $idVenta;
    private $idProducto;
    private $cantidad;
    private $precioUnitario;
    private $incluyeLicor;
    private $subTotal;

    public function __construct($idDetalleVenta = null, $idVenta, $idProducto, $cantidad, $precioUnitario, $incluyeLicor, $subTotal)
    {
        $this->idDetalleVenta = $idDetalleVenta;
        $this->idVenta = $idVenta;
        $this->idProducto = $idProducto;
        $this->cantidad = $cantidad;
        $this->precioUnitario = $precioUnitario;
        $this->incluyeLicor = $incluyeLicor;
        $this->subTotal = $subTotal;
    }

    // --- GETTERS ---
    public function getIdDetalleVenta(): int
    {
        return $this->idDetalleVenta;
    }
    public function getIdVenta(): int
    {
        return $this->idVenta;
    }
    public function getIdProducto(): int
    {
        return $this->idProducto;
    }
    public function getCantidad(): int
    {
        return $this->cantidad;
    }
    public function getPrecioUnitario(): float
    {
        return $this->precioUnitario;
    }
    public function getIncluyeLicor(): bool
    {
        return $this->incluyeLicor;
    }
    public function getSubTotal(): float
    {
        return $this->subTotal;
    }

    // --- SETTERS ---
    public function setIdDetalleVenta(int $id): void
    {
        $this->idDetalleVenta = $id;
    }
    public function setIdVenta(int $id): void
    {
        $this->idVenta = $id;
    }
    public function setIdProducto(int $id): void
    {
        $this->idProducto = $id;
    }
    public function setCantidad(int $cant): void
    {
        $this->cantidad = $cant;
    }
    public function setPrecioUnitario(float $precio): void
    {
        $this->precioUnitario = $precio;
    }
    public function setIncluyeLicor(bool $opcion): void
    {
        $this->incluyeLicor = $opcion;
    }
    public function setSubTotal(float $sub): void
    {
        $this->subTotal = $sub;
    }
}