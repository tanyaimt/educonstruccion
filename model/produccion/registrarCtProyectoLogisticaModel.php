<?php
	$consulta="INSERT INTO `cotizacion` (`idContrato1`, `descripcionCotizacion`, `precioCotizacion`) VALUES ('".$idContrato."', '".$descripcionCotizacion."', '".$precioCotizacion."')";
	$enlace->query($consulta);
?>

