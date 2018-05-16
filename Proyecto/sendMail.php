<?php
$correo = $_POST['email'];
$asunto = $_POST['asu'];
$msj = $_POST['mensaje'];

//$nombre = $_POST['nombre'];
//$apaterno = $_POST['apaterno'];
//$amaterno = $_POST['amaterno'];

  ini_set('sendmail_from', 'esletutuns0307@gmail.com');
    //Asunto
   
   //Correo del destinatario
   $para = $correo; 
   //Cuerpo
   $contenido = "  <html>
            <center><body>
              <div style='background-color:#B7D6D1;'>
                <img src='https://denisseestrada.com/images/logo.png' href='http://misitio.com' alt='Denisse Estrada'/>
              </div>";
   $contenido .= "<p>Hola <span style='color : #B7D6D1; font-weight : bold;'>".""."!</span><br><br>
            Tus datos de registro son:<br>
            Nombre: ".""."<br>
            Mensaje: ".$msj."<br>
            Apellido Materno: ".""."<br>
            Correo: ".$correo."<br><br>
            <small style='color : #FEC8D6;'>Este email fue enviado con php</small></p>
            </body></center>
            </html>";
   //Cabecera
   $cabecera = "From: 'Denisse Estrada'<esletutuns0307@gmail.com>\r\n"; //Remitente
     $cabecera .= "Bcc: contacto@gmail.com\r\n"; //Copia oculta
   $cabecera .= "Content-type: text/html; charset=UTF-8\r\n";
                 
   // Enviar mail
  $resultado= mail($para, $asunto, $contenido, $cabecera);
  if($resultado){
  header('location:script/reload.php?msj=Enviado&tp=success&tl=Correo&p=open1');
    
  }else{
  header('location:script/reload.php?msj=Enviado&tp=success&tl=Correo&p=email');
  }
?>