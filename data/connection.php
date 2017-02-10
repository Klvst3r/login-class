<?php

class connection{
	function connect(){
		return mysqli_connect("localhost","dev","desarrollo");
	}
}

?>