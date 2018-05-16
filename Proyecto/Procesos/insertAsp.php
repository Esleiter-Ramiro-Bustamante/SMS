  <?php 
    require_once "../config.php";
    $c = new config();
    $conexion = $c->conexion();
    $rfc = $conexion->real_escape_string(htmlentities($_POST['rfc']));
    $curp = $conexion->real_escape_string(htmlentities($_POST['curp']));
    $nom = $conexion->real_escape_string(htmlentities($_POST['nomasp']));
    $apat = $conexion->real_escape_string(htmlentities($_POST['apat']));
    $amat = $conexion->real_escape_string(htmlentities($_POST['amat']));
    $emailasp = $conexion->real_escape_string(htmlentities($_POST['emailasp']));
    $sql = "SELECT id_u FROM user WHERE email='$emailasp' ";
    $result = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_row($result)) {
        ?>
  <?php 
  $reg=$mostrar[0];
}
/***********************************************************************/
$r = mysqli_query($conexion, "INSERT INTO reg(rfc,curp,nomreg,apat,amat,id_u)
VALUES ('$rfc', '$curp', '$nom','$apat', '$amat','$reg')");
if ($r == 1) {
    header('location:../script/reload.php?msj=USUARIO&tp=success&tl=REGISTRADO&p=open');

} else {
    header('location:../script/reload.php?msj=ERROR&tp=error&tl=NO SE GUARDARON LOS DATOS USUARIO&p=error');

}
mysqli_close($conexion);

?>