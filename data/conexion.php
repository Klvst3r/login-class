<?php

class conexion{
	function conectar(){
		return mysqli_connect("localhost","dev","desarrollo");
	}
}
/*
* Verification of Database Connection
* 

$cnn = new conexion();
if($cnn->conectar()){
	echo "Connected";
}
else{
	echo "Disconnected";
}
*/
?>