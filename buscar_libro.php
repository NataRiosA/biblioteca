<?php 

	include('conexion.php');
	$objeto = new Conexion();
	$conexion = $objeto->Conectar()

	$consulta = "SELECT * FROM libros";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $datos = $resultado->fetchAll();

    var dump($datos); 

    foreach ($datos as dato) {
    	echo $dato['titulo']. "<br>";
    }

 ?>