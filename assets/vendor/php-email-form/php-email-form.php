<style>
    #contenedor{
        width:100%;
        height:500px;
    }
    #close{
        background-color:#F6F8FC;
       width:50%;
        height:250px;
        border-radius:15px;
        margin:auto;
        margin-top:125px;
    }
    h1{
        text-align:center;
        font-family:calibri;
    }
    h3{
        text-align:center;
    }
    #boton{
        background-color: #EF6232;
        width:150px;
        height:30px;
        border-radius:50px;
        margin:auto;
        margin-top:60px;
    }
    #boton:hover{
        background-color:#C65027;
    }
    a{
        text-decoration:none;
        color:white;
        margin-left:40px;
        padding-top:5px;
        font-size:18px;
    }
</style>
<?php
   //Reseteamos variables a 0.
   //$nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['email'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['name'];
      $email = $_POST['email'];
      $subject = "Pagos recurrentes | VendoOnline";
      $phone = $_POST['phone'];

      //Creamos cabecera.
      //$headers = 'From' . " " . $email . "\r\n";
      $headers = "From: ccisternas@vendoonline.cl" . "\r\n" . "CC: ccisternas@vendoonline.cl ";
      //$headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "telefono: " . $phone;
      $msjCorreo .= "\r\n";
    
    //mail($email, $subject, $msjCorreo, $headers);
    
    
    if (mail($email, $subject, $msjCorreo, $headers)) {;?>
        <div id="contenedor">
            <div id="close">
                <br>
                <h1> Tus datos fueron enviados correctamente</h1>
                <h3>En poco tiempo nos contactaremos contigo</h3>
                <div id="boton">
                    <a href="http://dev.chileguia.cl/landing/DevBook-v1.2">Continuar</a>
                </div>
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