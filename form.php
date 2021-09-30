<?php 
 
$connection = new mysqli ("localhost","root","","tpalt");

$name = '';
$telefono = '';
$correo = '';
$mensaje = '';

if (! empty ($_POST['nombre']) && is_string ($_POST['nombre']) && ! empty($_POST['telefono']) && is_string ($_POST['telefono'])
&& ! empty ($_POST['correo']) && is_string ($_POST['correo']) && ! empty($_POST['mensaje']) && is_string($_POST['mensaje'])) {

$nombre = mysqli_real_escape_string($connection, $_POST['nombre']); 
$telefono = mysqli_real_escape_string($connection, $_POST['telefono']);
$correo = mysqli_real_escape_string($connection, $_POST['correo']);
$mensaje =mysqli_real_escape_string( $connection, $_POST['mensaje']);

}
  else {
    header('Location: index.html');
  }

$result = $connection->query ("INSERT INTO formulario (Nombre, Telefono, Correo, Mensaje) VALUES ('$nombre','$telefono','$correo','$mensaje')");


if($result){
  header('Location: index.html');
}

 
?>
