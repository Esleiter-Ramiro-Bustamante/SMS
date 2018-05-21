
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

<form  action="Procesos/insertUs.php" method="post" class="form-horizontal">

  <fieldset>
      <legend><center><h2>Crear Cuenta</h2></center></legend>
      
      
        <div class="form-group">
    <label for="usuario">Elija nombre de usuario:</label>
    <input  type="text" class="form-control" id="username" name="usuario" placeholder="Ingrese su usuario" >
 	   </div>
        <div class="form-group">
    <label for="password">Contraseña:</label>
    <input  class="form-control" type="password" id="contrasena" name="pass"  placeholder="Ingrese su Contraseña" pattern="[A-Za-z0-9!?-]{6,12}"  title="password debe contener entre 6 y 12 caracteres, Letras Mayusculas,Minusculas y Numeros" required>
        </div>
        <div class="form-group">
    <label for="password">Confirmar Contraseña:</label>
    <input  class="form-control" type="password" id="contrasena" name="pass1"  placeholder="Password" pattern="[A-Za-z0-9!?-]{6,12}"  title="password debe contener entre 6 y 12 caracteres, Letras Mayusculas,Minusculas y Numeros" required>
        </div>
        <div class="form-group">
    <label for="email">Email</label>
    <input  class="form-control" type="email"  name="email"  placeholder="Correo Electronico" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  title="ingrese correo @" required>
        </div>
          <div class="form-group">
    <label for="telefono">Telefono:</label>
    <input  type="tel" class="form-control"  name="tel" placeholder="Ejemplo (522941245634)     Error=>( +522941245634)" >
 	   </div>
      
  <center>
<input class="btn btn-primary" type="submit" value="Crear Cuenta">
  </center>
  <br>
   <br>
 
  
             
  </fieldset>

		</form>

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>