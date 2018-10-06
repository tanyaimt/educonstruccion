<?php
	$consulta="SELECT * FROM usuario";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $tableresult=$tableresult."<tr><td><input type='submit' value='" . $row["idUsuario"]. "' name='btnAdministrarUsuario'></td><td>" . $row["nombreUsuario"]. "</td><td>" . $row["aPaternoUsuario"]. "</td><td>" . $row["aMaternoUsuario"]. "</td><td>" . $row["telefonoFijoUsuario"]. "</td><td>" . $row["telefonoMovilUsuario"]. "</td><td>" . $row["correoElectronicoUsuario"]. "</td></tr>";
	    }
	} else {
	    $errormsg="0 results";
	}
?>