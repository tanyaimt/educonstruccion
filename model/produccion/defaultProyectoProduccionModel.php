<?php
    
	$aux=substr($btnAdministrarProyectoProduccion, strlen($btnAdministrarProyectoProduccion)-1, 1);
	$btnAdministrarProyectoProduccion= substr($btnAdministrarProyectoProduccion,0, strlen($btnAdministrarProyectoProduccion)-1);
	switch ($aux) {
		case 'a':
			$consulta="SELECT * FROM empresaCliente inner join empresa on idEmpresa=idEmpresa1 WHERE idEmpresaCliente='".$btnAdministrarProyectoProduccion."'";
			$resultado = mysqli_query($enlace,$consulta);
			if (mysqli_num_rows($resultado) > 0) {
		    	while($row = mysqli_fetch_assoc($resultado)) {
					$idEmpresa= $row["idEmpresaCliente"];
					$razonSocial= $row["razonSocial"];
					$rfc= $row["rfc"];
					$telefonoEmpresa= $row["telefonoEmpresa"];
					$paginaWebEmpresa= $row["paginaWebEmpresa"];
					$calleEmpresa= $row["calleEmpresa"];
					$numInteriorEmpresa= $row["numInteriorEmpresa"];
					$numExteriorEmpresa= $row["numExteriorEmpresa"];
					$coloniaEmpresa= $row["coloniaEmpresa"];
					$ciudadEmpresa= $row["ciudadEmpresa"];
					$estadoEmpresa= $row["estadoEmpresa"];
					$tipoEmpresa= $row["tipoEmpresa"];
					
				}
			} else {
			    $errormsg="0 results";
			}
		break;
		case 'b':
			$consulta="SELECT * FROM obra WHERE idEmpresaCliente='".$idEmpresa."' and idObra='".$btnAdministrarProyectoProduccion."'";
			$resultado = mysqli_query($enlace,$consulta);
			$ConfirmarEmpresa="true";
			if (mysqli_num_rows($resultado) > 0) {
		    	while($row = mysqli_fetch_assoc($resultado)) {
		    		$idObra= $row["idObra"];
					$idEmpresaCliente= $row["idEmpresaCliente"];
					$descripcionObra= $row["descripcionObra"];
					$precioObra= $row["precioObra"];
				}
			} else {
			    $errormsg="0 results";
			}
		break;
		case 'c':
			$consulta="SELECT * FROM `contrato` WHERE idObra1='".$idObra."' and idContrato='".$btnAdministrarProyectoProduccion."'";
			$resultado = mysqli_query($enlace,$consulta);
			if (mysqli_num_rows($resultado) > 0) {
		    	while($row = mysqli_fetch_assoc($resultado)) {
		    		$idContrato= $row["idContrato"];
					$idObra= $row["idObra1"];
					$descripcionContrato= $row["descripcionContrato"];
					$precioContrato= $row["precioContrato"];
				}
			} else {
			    $errormsg="0 results";
			}
		break;
		case 'd':
			$consulta="SELECT * FROM cotizacion WHERE idContrato1='".$idContrato."' and idCotizacion='".$btnAdministrarProyectoProduccion."'";
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
		break;
		case 'e':
			$consulta="SELECT * FROM estimaciondestajo WHERE idCotizacion1='".$idCotizacion1."' and estimaciondestajo='".$btnAdministrarProyectoProduccion."'";
			$resultado = mysqli_query($enlace,$consulta);
			if (mysqli_num_rows($resultado) > 0) {
		    	while($row = mysqli_fetch_assoc($resultado)) {
					$idEstimacionDestajo=$row["idEstimacionDestajo"];
					$idCotizacion=$row["idCotizacion"];
					$idSupervisorObra1=$row["idSupervisorObra1"];
					$idFacturaVenta2=$row["idFacturaVenta2"];
					$estadoEstimacion=$row["estadoEstimacion"];
					$descripcionEstimacion=$row["descripcionEstimacion"];
					$precioEstimacion=$row["precioEstimacion"];
					$fechaInicio=$row["fechaInicio"];
					$fechaTermino=$row["fechaTermino"];
					$fechaUltimaActualizacion=$row["fechaUltimaActualizacion"];
				}
			} else {
			    $errormsg="0 results";
			}
		break;
	}
?>