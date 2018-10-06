<?php
	$consulta ="select idSupervisorObra from supervisorobra inner join empleadoDirecto on supervisorobra.idEmpleadoDirecto2=empleadoDirecto.idEmpleadoDirecto inner join empleado on empleado.idempleado=empleadoDirecto.idempleado1 inner join usuario on empleado.idUsuario1=usuario.idUsuario where loginUsuario='".$loginSupervisorObra."'";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
			$idSupervisorObra= $row["idSupervisorObra"];
	    }
	} else {
	    $errormsg="0 results";
	}
	$consulta="INSERT INTO estimacionDestajo(idCotizacion,idSupervisorObra1,idFacturaVenta2,estadoEstimacion,descripcionEstimacion,precioEstimacion,fechaInicio,fechaTermino,fechaUltimaActualizacion)VALUES(".$idCotizacion.",".$idSupervisorObra.",".$idFacturaVenta2.",'".$estadoEstimacion."','".$descripcionEstimacion."','".$precioEstimacion."',".$fechaInicio.",'".$fechaTermino."','".$fechaUltimaActualizacion."')";
	$enlace->query($consulta);
?>