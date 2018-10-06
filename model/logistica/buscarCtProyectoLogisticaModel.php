<?php
	$tableresult="";
	$consulta="SELECT * FROM cotizacion WHERE idCotizacion='".$idCotizacion."'";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
			$idCotizacion= $row["idCotizacion"];
			$idContrato= $row["idContrato1"];
			$descripcionCotizacion= $row["descripcionCotizacion"];
			$precioCotizacion= $row["precioCotizacion"];
	    }
	} else {
	    $errormsg="0 results";
	}
?>s