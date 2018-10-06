<?php

$servidor="localhost";
$usuario="root";
$contrasena="";
$base_datos="educonstruccion";

if(!$enlace=mysqli_connect($servidor,$usuario,$contrasena,$base_datos))
echo "No se realizó la conexión a la BD";
   
?>