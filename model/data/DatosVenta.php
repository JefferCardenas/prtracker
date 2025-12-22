<?php

include './config/Database.php';


class DatosVenta{

    private $con;
    private $datos;

    function __construct(){
        $this->con = Database::singleton();
        $this->datos = new stdClass();
    }

    function registrarVenta(){
        try{

            //TODO completar codigo registrar venta
            
        }catch(PDOException $ex){
            $this->datos = null;
            $this->datos->mensaje = $ex->getMessage();
        }
    }
}
?>