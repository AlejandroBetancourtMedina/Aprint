   
<?php
session_start();
require 'conexion.php';


$usuario = $_POST['txtNombre'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM trabajador WHERE usuario = '$usuario' and clave = '$clave'";
$consulta = mysqli_query($conexion, $query);

$resultado = mysqli_fetch_array($consulta);

if($resultado['contar']==0){
    $_SESSION['username'] = $usuario;
    header("location: back.php");
}else{
  echo "Datos Incorrectos";
}


?>
