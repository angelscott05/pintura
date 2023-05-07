<?php
$host="localhost";//terminal
$usuariodb="root";//nombre del usuario
$clavedb="";//password
$basededatos="formulario_2";//nombre de la tabla BD
$tabla_dbl="formulario_2";//tabla de usuarios

//error_reporting(0); //No muestra errores
$conexion= new mysqli($host, $usuariodb, $clavedb, $basededatos);

if ($conexion->connect_errno) {
	echo "Nuestro sitio experimenta fallos...";
	exit();
}
?>