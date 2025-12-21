<?php

class Database extends PDO{

    private static $instance = null;
    private $HOST = "aws-0-us-west-2.pooler.supabase.com";
    private $DBNAME = "postgres";
    private $USER = "postgres.cgtimiilqvvwqmgyzbvz";
    private $PASSWORD = "PR27032002@";
    private $DBPORT = "5432";
    private $pool_mode = "session";

    private function __construct(){

        try{
            parent::__construct("pgsql:host=$this->HOST;port=$this->DBPORT;dbname=$this->DBNAME;sslmode=require", $this->USER, $this->PASSWORD);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            echo "CONEXION EXITOSA!";
        }catch (Exception $ex){
            echo $ex->getMessage();
        }

    }

    public static function Singleton(){
        if(!isset(self::$instance)){
            $miClase = __CLASS__;
            self::$instance = new $miClase;
        }

        return self::$instance;
    }
    
}
