<?php

$connection = new mysqli("localhost", "root", "", "tpalt");
$nombre =  trim ($_POST['nombre']);
$telefono = trim ($_POST['telefono']);
$correo = trim ( $_POST['correo'] );
$mensaje = trim ($_POST['mensaje']);

if ( !empty( $_POST["nombre"]) && is_string($_POST["nombre"]) &&    
     !empty( $_POST["telefono"]) && is_string($_POST["telefono"]) &&
     !empty( $_POST["correo"]) && is_string($_POST["correo"]) &&    
     !empty( $_POST["mensaje"]) && is_string($_POST["mensaje"]));
//{  $nombre = $connection->real_escape_string($connection, $_POST["nombre"]);
// $telefono = $connection->real_escape_string($connection, $_POST["telefono"]);
//$correo = $connection->real_escape_string($connection, $_POST["correo"]);
//$mensaje = $connection->real_escape_string($connection, $_POST["mensaje"]);
//}else {     header("Location: index.html");  } 

$result = $connection->query ( "INSERT INTO formulario (Nombre, Telefono, Correo, Mensaje) VALUES ('$nombre','$telefono','$correo','$mensaje')");
  if ( $result ) { 
    ?>    
    <h3 class="ok">¡Mensaje enviado! </h3>
    <?php }
    else {
    ?>    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
    <?php}
    else { ?> <h3 class="bad">¡Por favor completa los campos!</h3>
    <?php  }
    if ($result) { header("Location: index.html"); }