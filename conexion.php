<?php
    class Conexion{
        public static function Conectar(){
            $host="127.0.0.1";
            $port="5432";
            $user="postgres";
            $pass="password";
            $dbname="biblioteca";
	
            try{

                $conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error()); 
                // $conexion = pg_connect($server,$db,$user,$pass);
                return $conexion;
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }
?>