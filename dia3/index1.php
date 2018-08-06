<?php 

//Activamos el almacenamiento en el buffer
ob_start();
//Activamos el uso de session
session_start();

//ensesion es una bandera que creamos para indicar si existe una sesion. si no existe tiene que ir a login.html
if (!isset($_SESSION["ensesion"]))
{
  header("Location: login.html");
}
else //Es decir, existe el flag ensesion, o sea, puede ser que exista un login
{
require 'header.php';
}
?>