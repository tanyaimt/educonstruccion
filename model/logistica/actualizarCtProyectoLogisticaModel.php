<?php
	$consulta="UPDATE cotizacion SET descripcionCotizacion='".$descripcionCotizacion."',precioCotizacion='".$precioCotizacion."' WHERE idCotizacion=".$idCotizacion;
	$enlace->query($consulta);
?>