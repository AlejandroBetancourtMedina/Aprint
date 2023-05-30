<link rel="stylesheet" type="text/css" href="style.css">
<?php

session_start();


if(isset($_POST['logout'])) { // si se ha enviado el formulario de cierre de sesión
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}

$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: login.php");
}else{ 


echo "<h1><u>BIENVENIDO/A</u></h1><h2>$sesion</h2> ";
}

?>
<br>
<br>
<button id="submit" ><a href="login.php">Cerrar Sesion</a></button>

