<?php
	$tableresult=$tableresult."<tr><th>id</th><th>Razones Social</th><th>Telefono</th><th>Sitio Web</th><th>RFC </th></tr>";
			$consulta="SELECT * FROM empresa";
				$resultado = mysqli_query($enlace,$consulta);
				if (mysqli_num_rows($resultado) > 0) {
				    while($row = mysqli_fetch_assoc($resultado)) {
				        $tableresult=$tableresult."<tr><td><input type='submit' value='".$row["idEmpresa"]. "a' name='btnAdministrarProyectoLogistica'></td><td>" . $row["razonSocial"]. "</td><td>" . $row["telefonoEmpresa"]. "</td><td>" . $row["paginaWebEmpresa"]. "</td><td>" . $row["rfc"]. "</td></tr>" ;
				    }
				}
?>