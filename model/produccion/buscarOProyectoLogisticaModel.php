<?php
	$tableresult="";
	$consulta="SELECT * FROM obra WHERE idObra='".$idObra."'";
	$resultado = mysqli_query($enlace,$consulta);
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
?>