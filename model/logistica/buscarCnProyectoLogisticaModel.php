<?php
	$tableresult="";
	echo $idObra;
	$consulta="SELECT * FROM contrato WHERE idObra1='".$idObra."'";
	$resultado = mysqli_query($enlace,$consulta);
	$ConfirmarEmpresa="true";
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
			$idObra= $row["idObra1"];
			$descripcionContrato= $row["descripcionContrato"];
			$precioContrato= $row["precioContrato"];
	} }else {
	    $errormsg="0 results";
	}
?>