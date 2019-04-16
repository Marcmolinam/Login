<?php
include ("../lib/constantes.php");
include ("../lib/db.php");
include ("../clases/Usuario.php");

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
echo "USR= $usuario---PWD:$clave";
?>