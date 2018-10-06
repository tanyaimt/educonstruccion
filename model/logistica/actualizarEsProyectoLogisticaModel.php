<?php
	$consulta="UPDATE estimaciondestajo SET idCotizacion='".$idCotizacion."',idSupervisorObra1='".$idSupervisorObra1."',idFacturaVenta2='".$idFacturaVenta2."',estadoEstimacion='".$estadoEstimacion."',descripcionEstimacion='".$descripcionEstimacion."',precioEstimacion='".$precioEstimacion."',fechaInicio=".$fechaInicio.",fechaTermino='".$fechaTermino."',fechaUltimaActualizacion='".$fechaUltimaActualizacion."' WHERE idEstimacionDestajo=".$idEstimacionDestajo;
	$enlace->query($consulta);
?>

