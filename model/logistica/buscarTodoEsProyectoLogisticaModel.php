<?php
	$consulta="SELECT * FROM estimacionDestajo where idCotizacion=".$idCotizacion;
	$tableresult="<table border='1' class='table1' ><tr><th>id</th><th>Descripcion</th><th>Monto</th></tr>";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $tableresult=$tableresult."<tr><td><input type='submit' value='".$row["idEstimacionDestajo"]. "a' name='btnAdministrarProyectoLogistica'></td><td>" . $row["descripcionEstimacion"]. "</td><td>" . $row["precioEstimacion"]. "</td></tr>" ;
	    }
	} else {
	    $errormsg="0 results";
	}
?>