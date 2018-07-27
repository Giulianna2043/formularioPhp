<?php
include("conex.php");
$link =Conectarse();
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$telefono=$_GET['telefono'];

mysql_query("INSERT INTO usuarios2018 (nombre,apellido,email,telefono) VALUES ('$nombre','$apellido','$email','$telefono')",$link);
header("Location:formulario.php");
?>