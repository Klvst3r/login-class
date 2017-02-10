<?php

include "conexion.php";

function crearBd(){
	$cnn = new conexion();
	$con = $cnn->conectar();

	$sql = "CREATE DATABASE loginClass";
	
	mysqli_query($con, $sql);
	mysqli_close($con);
}


?>