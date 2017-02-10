<?php

class connection{
	function connect(){
		return mysqli_connect("localhost","dev","desarrollo");
	}
}
/*
* Verification of Database Connection
* 

$cnn = new connection();
if($cnn->connect()){
	echo "Connected";
}
else{
	echo "Disconnected";
}
*/
?>