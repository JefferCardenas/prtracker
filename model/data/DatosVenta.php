<?php

include './config/Database.php';
date_default_timezone_set('America/Bogota');

class DatosVenta
{

    private $con;
    private $datos;

    function __construct()
    {
        $this->con = Database::singleton();
        $this->datos = new stdClass();
    }

    function registrarVenta($data)
    {
        try {

            //obtenermos el id del producto seleccionado
            $query = "select * from productos where nombre = 'vasos {$data["tamano"]}oz'";
            $result = $this->con->query($query);
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            $idProducto = $row[0]['id_producto'];

            $this->con->beginTransaction();
            //registrar en tabla venta 
            $queryVenta = "INSERT INTO venta VALUES(null, ?,?)";
            $resultVenta = $this->con->prepare($queryVenta);
            $resultVenta->bindParam(1, date('d-m-Y'));
            $resultVenta->bindParam(2, $data['total']);
            $resultVenta->execute();
            $idVenta = $this->con->lastInsertId();
            //registrar en tabla detalleVenta 

            $queryVenta = "INSERT INTO venta VALUES(null,?,?)";
            $resultVenta = $this->con->prepare($queryVenta);
            //restar del stock

            header('Content-Type: application/json');
            $retorno = json_encode([
                'success' => true,
                'message' => 'Datos recibidos correctamente',
                'data' => [
                    'RESPONSE -> ' => $result
                ]
            ]);
        } catch (PDOException $ex) {
            $this->datos = null;
            $this->datos->mensaje = $ex->getMessage();
        }

        return $retorno;
    }
}