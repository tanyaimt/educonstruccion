<?php
	$consulta="SELECT * FROM usuario WHERE idUsuario='".$btnAdministrarUsuario."'";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $idUsuario=$row["idUsuario"];
			$nombreUsuario=$row["nombreUsuario"];
			$aPaternoUsuario=$row["aPaternoUsuario"];
			$aMaternoUsuario=$row["aMaternoUsuario"];
			$telefonoFijoUsuario=$row["telefonoFijoUsuario"];
			$telefonoMovilUsuario=$row["telefonoMovilUsuario"];
			$calleUsuario=$row["calleUsuario"];
			$numInteriorUsuario=$row["numInteriorUsuario"];
			$numExteriorusuario=$row["numExteriorusuario"];
			$coloniaUsuario=$row["coloniaUsuario"];
			$ciudadUsuario=$row["ciudadUsuario"];
			$estadoUsuario=$row["estadoUsuario"];
			$codigoPostalUsuario=$row["codigoPostalUsuario"];
			$correoElectronicoUsuario=$row["correoElectronicoUsuario"];
			$loginUsuario=$row["loginUsuario"];
			$constrasenaUsuario=$row["constrasenaUsuario"];
			$tipoUsuario=$row["tipoUsuario"];
	    }
	} else {
	    $errormsg="0 results";
	}
?>