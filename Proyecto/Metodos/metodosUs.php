<?php 
class metodosUs{
	public function mostrarReg($sql){
		$c=new config();
		$conexion=$c->conexion();
		$result=mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
	}

	public function insertUS($datos){

		$c=new config();
		$conexion=$c->conexion();
		$sql="INSERT INTO user (nom,pass,email,tel)
		VALUES ('$datos[0]','($datos[1])','$datos[2]','$datos[3]') ";
		return $result=mysqli_query($conexion,$sql);
	}

	public function actualizarMateria($datos){
		$c=new config();
		$conexion=$c->conexion();
		$sql="UPDATE t_persona SET nombre='$datos[0]',
								   apellido='$datos[1]' 
								   WHERE  id_p='$datos[2]'";
		return $result=mysqli_query($conexion,$sql);
	}

	public function eliminarMateria($id_mat){
		$c=new config();
		$conexion=$c->conexion();
		$sql="DELETE FROM materia WHERE  cod_materia='$id_mat'";
		return $result=mysqli_query($conexion,$sql);
	}

}


 ?>