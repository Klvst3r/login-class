<?php

include "connection.php";

function createDB() {
	$cnn = new connection();
	$conn = $cnn->connect();

	$sql = "CREATE DATABASE login-class";
	if(mysqli_master_query($conn, $sql)){
		echo "DataBase Creation Successfull!!";
	} 
	mysql_close($conn);
}

function createTable() {
	$cnn = new connection();
	$conn = $cnn->connect();
	mysqli_select_db($conn,"formLogin");

	$sql="CREATE TABLE usuarios(
	id INT(11) NOT NULL AUTO_INCREMENT,
	user CHAR(50),
	pass CHAR(50),
	PRIMARY KEY(id)
	)";

	if(mysqli_query($conn,$sql)){
		echo "Table Created Successfull";
	}
	mysqi_close($conn);
}

?>