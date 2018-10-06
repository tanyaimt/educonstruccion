<?php
	$consulta="SELECT * FROM obra WHERE idEmpresa2=".$idEmpresa;
	$tableresult=$tableresult."<tr><th>id</th><th>Descripcion de Obra</th><th>Precio</th></tr>";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $tableresult=$tableresult."<tr><td><input type='submit' value='".$row["idObra"]. "b' name='btnAdministrarProyectoLogistica'></td><td>" . $row["descripcionObra"]. "</td><td>" . $row["precioObra"]. "</td></tr>" ;
	    }
	} else {
	    $errormsg="0 results";
	}
?>