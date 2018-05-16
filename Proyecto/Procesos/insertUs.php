<?php 

require_once "../config.php";


$c = new config();
$conexion = $c->conexion();

$us = $conexion->real_escape_string(htmlentities($_POST['usuario']));

$pass = $conexion->real_escape_string(htmlentities($_POST['pass']));


$email = $_POST['email'];
$tel = $_POST['tel'];

$sha = sha1($pass);

$r = mysqli_query($conexion, "INSERT INTO user(nom,pass,email,tel)
VALUES ('$us', '$sha', '$email','$tel')");
if ($r == 1) {
	header('location:../script/reload.php?msj=USUARIO&tp=success&tl=REGISTRADO&p=open');

} else {
	header('location:../script/reload.php?msj=ERROR&tp=error&tl=NO SE GUARDARON LOS DATOS USUARIO&p=error');

}
mysqli_close($conexion);
?>