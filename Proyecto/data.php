 <?php 


session_start();
if (isset($_SESSION['u_usuario'])) {
  echo ' ' . $_SESSION['u_usuario'];

} else {
  header("Location:login.php");
}

?>
<?php 

require_once "config.php";
require_once "metodos/metodosUs.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Inicio</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.form.js'></script>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<!-- -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><span class="sr-only"></span></a>
            </li>  
            <li class="nav-item active">
              <a class="nav-link" href="PanelControl.php"></a>
            </li>  
                  
          </ul>
          
      </nav>
    </header>

    <!-- Begin page content -->

<div class="container">
    <center>
        <h2 class="mt-5"><img src="img20.jpg" width="1000px"></h2>
    </center>
 
 <hr>
<div class="container">
  <div class=style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
   <!-- Contenido --> 

<div id="content">
      
      <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
            <center>  <h3>Lista de Usuarios</h3>
            </center>
            
              <br>
              <br>
             
              
            </div>
            <div class="panel-body">
              <div class="responsive-table">
                <table id="table" class="table table-striped table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                  <thead>
                   <tr>
                          <th>No</th>
                          <th>Nombre</th>
                          <th>A.Paterno</th>
                         <th>A.Materno</th>
                          <th>Email</th>
                          <th>Tel</th>
                           <th colspan="2">ENVIAR</th>
                         
                          
                        </tr>
                      </thead>
                    <?php 
                    $obj = new metodosUs();
  

                    $sql = "SELECT id_reg,nomreg,apat,amat,email,tel FROM reg INNER JOIN user ON reg.id_u = user.id_u";
                    $datos = $obj->mostrarReg($sql);

                    foreach ($datos as $key) {
                    ?>
                      <tbody>
                        <tr>
                          <th><?php echo $key['id_reg']; ?></th>
                          <td><?php echo $key['nomreg']; ?></td>
                          <td><?php echo $key['apat']; ?></td>
                           <td><?php echo $key['amat']; ?></td>
                          <td><?php echo $key['email']; ?></td>
                          <td><?php echo $key['tel']; ?></td>
                          <td><a href="email.php?email=<?php echo $key['email'] ?>" class="btn btn-success">CORREO</a></td>
                          <td><a href="tel.php?tel=<?php echo $key['tel'] ?>" class="btn btn-primary">TELEFONO</a></td>
                          
                          
                        </tr>
                
                  </tbody>
                      <?php 
                    }
                    ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 <!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->


</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
          <center>
        <span class="text-muted"><p><a href="" target="_blank">2018-2019</a></p></span>

          </center>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
    
    <script>
  $(document).ready(function(){
  $('#table').DataTable( {
    "columnDefs": [
      {
        "visible": false,
        "searchable": true
      }
    ],
    "language": {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    }
  });
});
</script>
  </body>
</html>