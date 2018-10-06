<?php
	$consulta="SELECT * FROM contrato where idObra1=".$idObra;
	$tableresult=$tableresult."<tr><th>id</th><th>Descripcion de Obra</th><th>Precio</th></tr>";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $tableresult=$tableresult."<tr><td><input type='submit' value='".$row["idContrato"]. "c' name='btnAdministrarProyectoLogistica'></td><td>" . $row["descripcionContrato"]. "</td><td>" . $row["precioContrato"]. "</td></tr>" ;
	    }
	} else {
	    $errormsg="0 results";
	}
?>