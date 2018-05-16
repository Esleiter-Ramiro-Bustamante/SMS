<?php 
class config
{

	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "proyecto";

	public function conexion()
	{
		$conexion = mysqli_connect(
			$this->host,
			$this->user,
			$this->pass,
			$this->db
		);
		$conexion->query("SET NAMES 'utf8'");

		return $conexion;
	}



}

?>