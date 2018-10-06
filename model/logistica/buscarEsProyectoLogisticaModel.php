<?php
	$tableresult="";
	$consulta="SELECT * FROM estimacionDestajo WHERE idEstimacionDestajo='".$idEstimacionDestajo."'";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
			$idEstimacionDestajo= $row["idEstimacionDestajo"];
			$idCotizacion= $row["idCotizacion"];
			$idSupervisorObra1= $row["idSupervisorObra1"];
			$idFacturaVenta2= $row["idFacturaVenta2"];
			$estadoEstimacion= $row["estadoEstimacion"];
			$descripcionEstimacion= $row["descripcionEstimacion"];
			$precioEstimacion= $row["precioEstimacion"];
			$fechaInicio= $row["fechaInicio"];
			$fechaTermino= $row["fechaTermino"];
			$fechaUltimaActualizacion= $row["fechaUltimaActualizacion"];
	    }
	} else {
	    $errormsg="0 results";
	}
?>