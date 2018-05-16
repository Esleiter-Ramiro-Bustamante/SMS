<?php 

session_start();
session_destroy();

header('location:script/reload.php?msj=CERRANDO &tp=success&tl=SESION DE USUARIO&p=close');


 ?>