
<?php
   //Reseteamos variables a 0.
   //$nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['email'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      //Creamos cabecera.
      //$headers = 'From' . " " . $email . "\r\n";
      $headers = "From: dg.digonz@gmail.com" . "\r\n" . "CC: dg.digonz@gmail.com ";
      //$headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $message;
      $msjCorreo .= "\r\n";
    
    //mail($email, $subject, $msjCorreo, $headers);
    
    
    if (mail($email, $subject, $msjCorreo, $headers)) {;?>
        <div id="contenedor">
            <div id="close">
                <br>
                <h4>¡Tus datos fueron enviados correctamente!</h4>
                <h6>En poco tiempo nos contactaremos contigo.</h6>
            </div>
        </div>
    <?php    
    } 
    else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>