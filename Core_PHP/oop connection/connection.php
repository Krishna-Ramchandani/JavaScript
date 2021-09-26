<?php

class Connection {
	public function __construct(){
		echo "Connection File.";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database="dbtuts";


		$con = mysqli_connect($servername, $username, $password,$database);

	}
}
?>
