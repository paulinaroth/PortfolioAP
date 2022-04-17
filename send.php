<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$para='rothermel.alejandra@gmail.com';
$titulo='Mensaje de Porfolio AP';
$header='From:'.$email;
$msjCorreo="Nombre:$nombre\n E-Mail:$email\n Mensaje:$mensaje";

if($_POST['submit']){
if(mail($para,$titulo,$msjCorreo,$header)){
echo"<script language='javascript'>
alert('Mensaje enviado, muchas gracias por tus comentarios.');
window.location.href='#';
</script>";
}else{
echo'Falló el envío';
}
}
?>