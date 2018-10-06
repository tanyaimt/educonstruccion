<?php
	$consulta="SELECT * FROM cotizacion WHERE idcontrato1=".$idContrato."";
	$tableresult="<table border='1' class='table1' ><tr><th>id</th><th>Descripcion Cotizacion</th><th>Precio</th></tr>";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $tableresult=$tableresult."<tr><td><input type='submit' value='".$row["idCotizacion"]. "d' name='btnAdministrarProyectoLogistica'></td><td>" . $row["descripcionCotizacion"]. "</td><td>" . $row["precioCotizacion"]. "</td></tr>" ;
	    }
	} else {
	    $errormsg="0 results";
	}
?>