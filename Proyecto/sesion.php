

<?php 

session_start();
if(isset($_SESSION['u_usuario'])){
	echo "";

}
else{
	header("Location:login.php");
}

	 ?>