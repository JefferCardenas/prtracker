<?php
class Producto{

    private $idProducto;
    private $nombre;
    private $precio;
    private $stockActual;
    private $stockMinimo;

    public function __construct(int $idProducto, string $nombre, float $precio, int $stockActual, int $stockMinimo) {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stockActual = $stockActual;
        $this->stockMinimo = $stockMinimo;
    }

    // --- GETTERS ---
    public function getIdProducto(): int { return $this->idProducto; }
    public function getNombre(): string { return $this->nombre; }
    public function getPrecio(): float { return $this->precio; }
    public function getStockActual(): int { return $this->stockActual; }
    public function getStockMinimo(): int { return $this->stockMinimo; }

    // --- SETTERS ---
    public function setIdProducto(int $id): void { $this->idProducto = $id; }
    public function setNombre(string $nombre): void { $this->nombre = $nombre; }
    public function setPrecio(float $precio): void { $this->precio = $precio; }
    public function setStockActual(int $stock): void { $this->stockActual = $stock; }
    public function setStockMinimo(int $stock): void { $this->stockMinimo = $stock; }
}
?>