<?php
echo $idEmpresaCliente;
	$tableresult="";
	$consulta="SELECT * FROM empresacliente inner join empresa on idEmpresa=idEmpresa1 WHERE idEmpresaCliente='".$idEmpresaCliente."'";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
			$idEmpresaCliente= $row["idEmpresaCliente"];
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
?>


