<?php

			$consulta="INSERT INTO empresa (razonSocial,rfc,telefonoEmpresa,paginaWebEmpresa,calleEmpresa,numInteriorEmpresa,numExteriorEmpresa,coloniaEmpresa,ciudadEmpresa,estadoEmpresa,tipoEmpresa) VALUES('".$razonSocial."','".$rfc."','".$telefonoEmpresa."','".$paginaWebEmpresa."','".$calleEmpresa."','".$numInteriorEmpresa."',".$numExteriorEmpresa.",'".$coloniaEmpresa."','".$ciudadEmpresa."','".$estadoEmpresa."','".$tipoEmpresa."')";
			$enlace->query($consulta);

			$consulta="SELECT * FROM empresa";
				$resultado = mysqli_query($enlace,$consulta);
				if (mysqli_num_rows($resultado) > 0) {
				    while($row = mysqli_fetch_assoc($resultado)) {
				        $id=$row["idEmpresa"];
				    }
				}


?>



