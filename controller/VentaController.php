<?php
include './config/Database.php';
include './model/entity/Venta.php';
include './model/data/DatosVenta.php';

extract($_REQUEST);

error_reporting(0);

$dVenta = new DatosVenta();

?>