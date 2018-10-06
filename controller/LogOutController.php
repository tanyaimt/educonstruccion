<?php

$sesioncalidad="0";
$sesioncliente="0";
$sesionfinanzas="0";
$sesionfiscal="0";
$sesiongerencia="0";
$sesioninventario="0";
$sesionlogistica="0";
$sesionobrero="0";
$sesionproduccion="0";
$sesionrh="0";
$sesionsistemas="0";
$sesionventas="0";
$sesion="0";

$consulta="Delete from sesion";
		$enlace->query($consulta);
include('controller/indexController.php');
?>