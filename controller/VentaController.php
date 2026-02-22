<?php
include '../config/Database.php';
include '../model/entity/Venta.php';
include '../model/data/DatosVenta.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);

error_reporting(0);

$dVenta = new DatosVenta();
$resultado = $dVenta->registrarVenta($data);

print_r($resultado);